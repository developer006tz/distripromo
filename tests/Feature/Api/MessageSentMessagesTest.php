<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\Message;
use App\Models\SentMessage;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class MessageSentMessagesTest extends TestCase
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
    public function it_gets_message_sent_messages(): void
    {
        $message = Message::factory()->create();
        $sentMessages = SentMessage::factory()
            ->count(2)
            ->create([
                'message_id' => $message->id,
            ]);

        $response = $this->getJson(
            route('api.messages.sent-messages.index', $message)
        );

        $response->assertOk()->assertSee($sentMessages[0]->phone);
    }

    /**
     * @test
     */
    public function it_stores_the_message_sent_messages(): void
    {
        $message = Message::factory()->create();
        $data = SentMessage::factory()
            ->make([
                'message_id' => $message->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.messages.sent-messages.store', $message),
            $data
        );

        $this->assertDatabaseHas('sent_messages', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $sentMessage = SentMessage::latest('id')->first();

        $this->assertEquals($message->id, $sentMessage->message_id);
    }
}
