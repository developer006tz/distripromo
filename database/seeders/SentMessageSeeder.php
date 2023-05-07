<?php

namespace Database\Seeders;

use App\Models\SentMessage;
use Illuminate\Database\Seeder;

class SentMessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SentMessage::factory()
            ->count(0)
            ->create();
    }
}
