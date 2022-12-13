<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\User;
use Carbon\Carbon;
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

        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);

        //create user
        $user = User::create([
            'name' => 'Administrator',
            'email'     => 'admin@gmail.com',
            'password'  => bcrypt('teamup2022'),
            'email_verified_at' => Carbon::now()
        ]);

        //get all permissions
        $permissions = Permission::all();

        //get role admin
        $role = Role::find(1);

        //assign permission to role
        $role->syncPermissions($permissions);

        //assign role to user
        $user->assignRole($role);

        //get role leader
        $role = Role::find(2);

        $role->syncPermissions([
            'team.index',
            'team.create',
            'team.edit',
            'team.delete',
        ]);

        Category::create([
            'name' => 'Web Development',
            'color' => '#C539B4'
        ]);

        Category::create([
            'name' => 'Mobile Development',
            'color' => '#DC3535'
        ]);


        // $this->call(SimulationSeeder::class);
    }
}
