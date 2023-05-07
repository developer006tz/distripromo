<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'profile_link' => $this->faker->text(255),
            'date' => $this->faker->date,
            'status' => 'pending',
            'user_id' => \App\Models\User::factory(),
            'service_id' => \App\Models\Service::factory(),
        ];
    }
}
