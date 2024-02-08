<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'David Tuta',
            'email' => 'santiagotutadiaz@gmail.com',
            'password' => bcrypt('n8y5q9y5')
        ]);

        User::factory(99)->create();
    }
}
