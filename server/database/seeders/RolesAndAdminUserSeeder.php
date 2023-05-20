<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolesAndAdminUserSeeder extends Seeder
{
    public function run()
    {
        // Create roles
        $adminRole = Role::findByName('admin', 'web');
        if (!$adminRole) {
            // Create the admin role
            $adminRole = Role::create(['name' => 'admin']);
        }
        $userRole = Role::findByName('user', 'web');
        if (!$adminRole) {
            // Create the admin role
            $userRole = Role::create(['name' => 'user']);
        }

        // Create permissions if needed
        // Permission::create(['name' => 'permission_name']);

        // Assign permissions to roles if needed
        // $adminRole->givePermissionTo('permission_name');

        // Create an admin user
        $adminUser = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'), // Replace 'password' with the desired password
        ]);

        // Assign the admin role to the admin user
        $adminUser->assignRole($adminRole);
    }
}
