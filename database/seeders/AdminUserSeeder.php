<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        // Create admin role if not exists
        $adminRole = Role::firstOrCreate(['name' => 'admin']);

        // Create admin user
        $adminUser = User::firstOrCreate([
            'name' => 'Admin:)',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('3010'), // Replace with a secure password
        ]);

        // Assign admin role to admin user
        $adminUser->assignRole($adminRole);
    }
}

