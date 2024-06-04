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

        Karyawan::factory()->create([
            'nik' => '123123',
            'nama' => 'Kusuma',
            'jabatan' => 'Staf',
            'departemen' => 'IT',
            'jenis_kelamin' => 'L',
            'alamat' => 'Jl. Kusuma No. 123',
            'no_hp' => '081234567890',
            'password' => bcrypt('123123'),
        ]);
    }
}
