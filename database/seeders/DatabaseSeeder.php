<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'admin@admin.com',
            'password'=>'$2y$12$IlwmQncrE/PSjOjxa2LuBOgwIuQBrHHB8DSfBivd1/6/E9AKDJXxG', //1234567890
        ]);
    }
}
