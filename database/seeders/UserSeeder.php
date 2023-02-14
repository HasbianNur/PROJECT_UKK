<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Admin',
            'email'     => 'admin@gmail.com',
            'password'  => Hash::make('admin'),
            'role'      => 'Admin'
        ]);
        User::create([
            'name'      => 'Anugrah Sandi',
            'email'     => 'nuge@gmail.com',
            'password'  => bcrypt('secret'),
            'role'      => 'Admin'
        ]);

        User::create([
            'name'      => 'Riski Amelia',
            'email'     => 'riski@gmail.com',
            'password'  => bcrypt('secret'),
            'role'      => 'Petugas'
        ]);

        User::create([
            'name'      => 'Anwar Client',
            'email'     => 'client@gmail.com',
            'password'  => bcrypt('secret'),
            'role'      => 'Masyarakat'
        ]);
    }
}