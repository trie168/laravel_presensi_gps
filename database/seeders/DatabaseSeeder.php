<?php

namespace Database\Seeders;

use App\Models\Karyawan;
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
        //  User::factory(20)->create();
        Karyawan::factory(25)->create();

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@tri.my.id',
            'password' => bcrypt('123123')
        ]);
    }
}
