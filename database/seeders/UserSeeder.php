<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            \App\Models\User::create([
                'name' => "Kreator $i",
                'email' => "creator$i@example.com",
                'password' => bcrypt('password'),
                'role' => 'buyer,creator',
                'foto' => "https://i.pravatar.cc/150?u=creator$i"
            ]);
        }
    }
}
