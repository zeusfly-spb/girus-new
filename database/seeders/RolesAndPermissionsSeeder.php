<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();

//        Permission::firstOrCreate(['name' => 'view posts']);

        $admin = Role::firstOrCreate(['name' => 'admin']);
        $provider = Role::firstOrCreate(['name' => 'provider']);
        $corporate = Role::firstOrCreate(['name' => 'corporate']);
        $user = Role::firstOrCreate(['name' => 'user']);

//        $admin->syncPermissions(['view posts','create posts','edit posts','delete posts']);
//        $provider->syncPermissions(['view posts','create posts','edit posts']);
    }
}
