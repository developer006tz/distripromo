<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Message;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MessageTest extends TestCase
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
    public function it_gets_messages_list(): void
    {
        $messages = Message::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.messages.index'));

        $response->assertOk()->assertSee($messages[0]->body);
    }

    /**
     * @test
     */
    public function it_stores_the_message(): void
    {
        $data = Message::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.messages.store'), $data);

        $this->assertDatabaseHas('messages', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_message(): void
    {
        $message = Message::factory()->create();

        $data = [
            'body' => $this->faker->text(),
            'target_user' => 'client',
        ];

        $response = $this->putJson(
            route('api.messages.update', $message),
            $data
        );

        $data['id'] = $message->id;

        $this->assertDatabaseHas('messages', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_message(): void
    {
        $message = Message::factory()->create();

        $response = $this->deleteJson(route('api.messages.destroy', $message));

        $this->assertModelMissing($message);

        $response->assertNoContent();
    }
}
