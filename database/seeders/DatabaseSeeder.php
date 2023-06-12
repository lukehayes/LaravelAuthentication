<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user = new \App\Models\User();
        $user->username = "Dev";
        $user->email = "dev@app.com";
        $user->password = "dev";

        $user->save();

        // \App\Models\User::factory()->create([
        //     'name' => 'Dev',
        //     'email' => 'dev@app.com',
        //     'password' => 'dev',
        // ]);

        // \App\Models\User::factory(10)->create();
    }
}
