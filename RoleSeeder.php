<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Define roles
        $roles = [
            'Super Admin', 'Admin', 'Chief Editor', 'Editor', 'Reporter',
            'Author', 'Content Writer', 'Photographer', 'Video Editor',
            'Fact Checker', 'Subscriber', 'Guest',
        ];

        foreach ($roles as $roleName) {
            Role::create(['name' => $roleName]);
        }

        // Create a Super Admin user
        $this->createSuperAdmin();
    }

    /**
     * Create the main super admin user.
     */
    private function createSuperAdmin(): void
    {
        $user = User::factory()->create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('password'), // Use a secure password in production
            'email_verified_at' => now(),
        ]);

        $role = Role::findByName('Super Admin');
        $user->assignRole($role);
    }
}