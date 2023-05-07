<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Adding an admin user
        $user = \App\Models\User::factory()
            ->count(1)
            ->create([
                'email' => 'developer@ludovickonyo.com',
                'phone'=>'+255746828843',
                'name'=>'Ludovic Konyo',
                'password' => \Hash::make('@Kibassa45kb#'),
            ]);
        $this->call(PermissionsSeeder::class);

        $this->call(MessageSeeder::class);
        $this->call(OrderSeeder::class);
        $this->call(SentMessageSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(SocialMediaPlatformSeeder::class);
        $this->call(TransactionSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(VendorSeeder::class);
    }
}
