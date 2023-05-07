<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use App\Models\SentMessage;

use App\Models\Message;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SentMessageControllerTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    protected function setUp(): void
    {
        parent::setUp();

        $this->actingAs(
            User::factory()->create(['email' => 'developer@ludovickonyo.com'])
        );

        $this->seed(\Database\Seeders\PermissionsSeeder::class);

        $this->withoutExceptionHandling();
    }

    /**
     * @test
     */
    public function it_displays_index_view_with_sent_messages(): void
    {
        $sentMessages = SentMessage::factory()
            ->count(5)
            ->create();

        $response = $this->get(route('sent-messages.index'));

        $response
            ->assertOk()
            ->assertViewIs('app.sent_messages.index')
            ->assertViewHas('sentMessages');
    }

    /**
     * @test
     */
    public function it_displays_create_view_for_sent_message(): void
    {
        $response = $this->get(route('sent-messages.create'));

        $response->assertOk()->assertViewIs('app.sent_messages.create');
    }

    /**
     * @test
     */
    public function it_stores_the_sent_message(): void
    {
        $data = SentMessage::factory()
            ->make()
            ->toArray();

        $response = $this->post(route('sent-messages.store'), $data);

        $this->assertDatabaseHas('sent_messages', $data);

        $sentMessage = SentMessage::latest('id')->first();

        $response->assertRedirect(route('sent-messages.edit', $sentMessage));
    }

    /**
     * @test
     */
    public function it_displays_show_view_for_sent_message(): void
    {
        $sentMessage = SentMessage::factory()->create();

        $response = $this->get(route('sent-messages.show', $sentMessage));

        $response
            ->assertOk()
            ->assertViewIs('app.sent_messages.show')
            ->assertViewHas('sentMessage');
    }

    /**
     * @test
     */
    public function it_displays_edit_view_for_sent_message(): void
    {
        $sentMessage = SentMessage::factory()->create();

        $response = $this->get(route('sent-messages.edit', $sentMessage));

        $response
            ->assertOk()
            ->assertViewIs('app.sent_messages.edit')
            ->assertViewHas('sentMessage');
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

        $response = $this->put(
            route('sent-messages.update', $sentMessage),
            $data
        );

        $data['id'] = $sentMessage->id;

        $this->assertDatabaseHas('sent_messages', $data);

        $response->assertRedirect(route('sent-messages.edit', $sentMessage));
    }

    /**
     * @test
     */
    public function it_deletes_the_sent_message(): void
    {
        $sentMessage = SentMessage::factory()->create();

        $response = $this->delete(route('sent-messages.destroy', $sentMessage));

        $response->assertRedirect(route('sent-messages.index'));

        $this->assertModelMissing($sentMessage);
    }
}
