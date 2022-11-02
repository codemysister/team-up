<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // daftar role
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'leader']);
        Role::create(['name' => 'member']);

        //permission dashboard
        Permission::create(['name' => 'dashboard.index', 'guard_name' => 'web']);

        //permission project
        Permission::create(['name' => 'team.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'team.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'team.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'team.delete', 'guard_name' => 'web']);


        //permission users
        Permission::create(['name' => 'role_team.index', 'guard_name' => 'web']);
        Permission::create(['name' => 'role_team.create', 'guard_name' => 'web']);
        Permission::create(['name' => 'role_team.edit', 'guard_name' => 'web']);
        Permission::create(['name' => 'role_team.delete', 'guard_name' => 'web']);

        //create user
        $user = User::create([
            'name' => 'Administrator',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('teamup2022'),
        ]);

        //get all permissions
        $permissions = Permission::all();

        //get role admin
        $role = Role::find(1);

        //assign permission to role
        $role->syncPermissions($permissions);

        //assign role to user
        $user->assignRole($role);
    }
}
