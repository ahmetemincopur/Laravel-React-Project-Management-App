<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            "name" => "Ahmet",
            "email" => "ahmet@example.com",
            "password"=>bcrypt("123.321A"),
            "email_verified_at"=>time()
        ]);

        \App\Models\Project::factory()
        ->count(30)
        ->hasTasks(30)
        ->create();
    }
}
