<?php

namespace Database\Factories;

use App\Models\SentMessage;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class SentMessageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SentMessage::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'phone' => $this->faker->phoneNumber(),
            'status' => '0',
            'date' => $this->faker->date(),
            'user_id' => \App\Models\User::factory(),
            'message_id' => \App\Models\Message::factory(),
        ];
    }
}
