<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Vendor;
use App\Models\Transaction;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class VendorTransactionsTest extends TestCase
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
    public function it_gets_vendor_transactions(): void
    {
        $vendor = Vendor::factory()->create();
        $transactions = Transaction::factory()
            ->count(2)
            ->create([
                'vendor_id' => $vendor->id,
            ]);

        $response = $this->getJson(
            route('api.vendors.transactions.index', $vendor)
        );

        $response->assertOk()->assertSee($transactions[0]->date);
    }

    /**
     * @test
     */
    public function it_stores_the_vendor_transactions(): void
    {
        $vendor = Vendor::factory()->create();
        $data = Transaction::factory()
            ->make([
                'vendor_id' => $vendor->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.vendors.transactions.store', $vendor),
            $data
        );

        $this->assertDatabaseHas('transactions', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $transaction = Transaction::latest('id')->first();

        $this->assertEquals($vendor->id, $transaction->vendor_id);
    }
}
