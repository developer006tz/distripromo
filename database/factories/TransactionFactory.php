<?php

namespace Database\Factories;

use App\Models\Transaction;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'amount' => $this->faker->randomNumber(1),
            'date' => $this->faker->date,
            'status' => 'pending',
            'order_id' => \App\Models\Order::factory(),
            'vendor_id' => \App\Models\Vendor::factory(),
            'user_id' => \App\Models\User::factory(),
        ];
    }
}
