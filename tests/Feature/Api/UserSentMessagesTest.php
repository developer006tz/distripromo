<?php

namespace Tests\Feature\Api;

use App\Models\User;
use App\Models\SentMessage;

use Tests\TestCase;
use Laravel\Sanctum\Sanctum;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserSentMessagesTest extends TestCase
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
    public function it_gets_user_sent_messages(): void
    {
        $user = User::factory()->create();
        $sentMessages = SentMessage::factory()
            ->count(2)
            ->create([
                'user_id' => $user->id,
            ]);

        $response = $this->getJson(
            route('api.users.sent-messages.index', $user)
        );

        $response->assertOk()->assertSee($sentMessages[0]->phone);
    }

    /**
     * @test
     */
    public function it_stores_the_user_sent_messages(): void
    {
        $user = User::factory()->create();
        $data = SentMessage::factory()
            ->make([
                'user_id' => $user->id,
            ])
            ->toArray();

        $response = $this->postJson(
            route('api.users.sent-messages.store', $user),
            $data
        );

        $this->assertDatabaseHas('sent_messages', $data);

        $response->assertStatus(201)->assertJsonFragment($data);

        $sentMessage = SentMessage::latest('id')->first();

        $this->assertEquals($user->id, $sentMessage->user_id);
    }
}
