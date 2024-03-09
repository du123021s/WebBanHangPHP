<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create roles
        $adminRole = Role::create(['name' => 'admin']);
        $managerRole = Role::create(['name' => 'manager']);
        $userRole = Role::create(['name' => 'user']);

        // Create permissions
        $createUserPermission = Permission::create(['name' => 'create users']);
        $editUserPermission = Permission::create(['name' => 'edit users']);
        $deleteUserPermission = Permission::create(['name' => 'delete users']);

        // Asign permissions to roles
        $adminRole->syncPermissions([
            $createUserPermission,
            $editUserPermission,
            $deleteUserPermission,
        ]);

        $managerRole->syncPermissions([
            $createUserPermission,
            $editUserPermission,
        ]);

        $userRole->syncPermissions([
            $editUserPermission,
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Role::whereIn('name', ['admin', 'manager', 'user'])->delete();
        Permission::whereIn('name', ['create users', 'edit users', 'delete users'])->delete();
    }
};
