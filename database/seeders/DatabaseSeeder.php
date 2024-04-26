<?php

namespace Database\Seeders;

use App\Models\Role;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
                //
              //
        Role::insert([
            [
                "name" => "admin",
                "guard_name" => "web"
            ],
            [
                "name" => "moderator",
                "guard_name" => "web"
            ],

        ]);
        $this->call([
            UserSeeder::class,
           
        ]);
    }
    
}
