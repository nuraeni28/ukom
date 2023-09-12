<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = new Role;
        $role->nama = 'Admin';
        $role->save();

        $role = new Role;
        $role->nama = 'Siswa';
        $role->save();


    }
}
