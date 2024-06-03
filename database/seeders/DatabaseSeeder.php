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
        User::factory(20)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@tri.my.id',
            'nik' => '123',
            'password' => bcrypt('123123'),
            'jabatan' => 'Admin',
            'departemen' => 'IT',
            'jenis_kelamin' => 'L',
            'alamat' => 'Jl. Raya No. 1',
            'no_hp' => '087788658282',
        ]);
    }
}
