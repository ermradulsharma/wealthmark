<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;

class StandardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 1. Create Roles
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $adminRole = Role::firstOrCreate(['name' => 'Admin']);
        $userRole = Role::firstOrCreate(['name' => 'User']);
        $merchantRole = Role::firstOrCreate(['name' => 'Merchant']);

        // 2. Create Admin User
        $admin = User::firstOrCreate(
            ['email' => 'admin@wealthmark.com'],
            [
                'first_name' => 'Super',
                'last_name' => 'Admin',
                'user_name' => 'superadmin',
                'password' => Hash::make('password'), // Default password
                'status' => 1,
                'email_verified_at' => now(),

            ]
        );
        $admin->assignRole($adminRole);

        // 3. Create Standard User
        $user = User::firstOrCreate(
            ['email' => 'user@wealthmark.com'],
            [
                'first_name' => 'Test',
                'last_name' => 'User',
                'user_name' => 'testuser',
                'password' => Hash::make('password'),
                'status' => 1,
                'email_verified_at' => now(),

            ]
        );
        $user->assignRole($userRole);

        $this->command->info('Standard seeding complete.');
        $this->command->info('Admin: admin@wealthmark.com / password');
        $this->command->info('User: user@wealthmark.com / password');
    }
}
