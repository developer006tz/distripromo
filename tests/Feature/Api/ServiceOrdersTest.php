<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Order;
use App\Models\Service;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ServiceOrdersTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $user = User::factory()->create(['email' => 'developer@ludovickonyo.com']);

        Sanctum::actingAs($user, [], 'web');

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_gets_service_orders(): void
    {
        $service = Service::factory()->create();
        $orders = Order::factory()
            ->count(2)
            ->create([
                'service_id' => $service->id,
            ]);

        $response = $this->getJson(
            route('api.services.orders.index', $service)
        );

        $response->assertOk()->assertSee($orders[0]->profile_link);
    }

    /**
     * @test
     */
    public function it_stores_the_service_orders(): void
    {
        $service = Service::factory()->create();
        $data = Order::factory()
            ->make([
                'service_id' => $service->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.services.orders.store', $service),
            $data
        );

        $this->assertDatabaseHas('orders', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $order = Order::latest('id')->first();

        $this->assertEquals($service->id, $order->service_id);
    }
}
