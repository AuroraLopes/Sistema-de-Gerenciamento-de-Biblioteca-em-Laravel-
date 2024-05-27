<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Usuarios;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Usuarios::factory()->create([
            'nome' => 'admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('admin')
        ]);
    }
}
