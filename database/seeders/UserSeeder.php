<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->nama = 'Admin';
        $user->username = 'admin';
        $user->password  = Hash::make('admin123');
        $user->role = 1;
        $user->save();

        $user = new User;
        $user->nama = 'Nuraeni';
        $user->username = 'nuraeni28';
        $user->password  = Hash::make('nuraeni28');
        $user->role  = 2;
        $user->save();
    }
}
