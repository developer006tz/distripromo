<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\SentMessage;

use App\Models\Message;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SentMessageTest extends TestCase
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
    public function it_gets_sent_messages_list(): void
    {
        $sentMessages = SentMessage::factory()
            ->count(5)
            ->create();

        $response = $this->getJson(route('api.sent-messages.index'));

        $response->assertOk()->assertSee($sentMessages[0]->phone);
    }

    /**
     * @test
     */
    public function it_stores_the_sent_message(): void
    {
        $data = SentMessage::factory()
            ->make()
            ->toArray();

        $response = $this->postJson(route('api.sent-messages.store'), $data);

        $this->assertDatabaseHas('sent_messages', $data);

        $response->assertStatus(201)->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_updates_the_sent_message(): void
    {
        $sentMessage = SentMessage::factory()->create();

        $user = User::factory()->create();
        $message = Message::factory()->create();

        $data = [
            'phone' => $this->faker->phoneNumber(),
            'status' => '0',
            'date' => $this->faker->date(),
            'user_id' => $user->id,
            'message_id' => $message->id,
        ];

        $response = $this->putJson(
            route('api.sent-messages.update', $sentMessage),
            $data
        );

        $data['id'] = $sentMessage->id;

        $this->assertDatabaseHas('sent_messages', $data);

        $response->assertOk()->assertJsonFragment($data);
    }

    /**
     * @test
     */
    public function it_deletes_the_sent_message(): void
    {
        $sentMessage = SentMessage::factory()->create();

        $response = $this->deleteJson(
            route('api.sent-messages.destroy', $sentMessage)
        );

        $this->assertModelMissing($sentMessage);

        $response->assertNoContent();
    }
}
