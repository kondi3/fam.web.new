<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'type' => User::TYPE_WEB_MANAGER,
            'name' => 'Administrator',
            'email' => 'admin@fammalawi.org',
        ]);

        User::factory()->create([
            'type' => User::TYPE_WEB_MANAGER,
            'name' => 'Administrator',
            'email' => 'chikondikamwendo@yahoo.com',
        ]);
    }
}
