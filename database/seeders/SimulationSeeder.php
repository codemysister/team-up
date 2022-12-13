<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class SimulationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        // User seeder
        for ($i = 0; $i < 50; $i++) {
            User::create([
                'name' => $faker->name(),
                'email' => $faker->email(),
                'password' => Hash::make('member123')
            ]);
        }

        // Category seeder
        $category = ['web development', '2d artist', 'vector art', 'videographic', 'game development', 'mobile development', 'ios development', '3d artist'];
        for ($i = 0; $i < 8; $i++) {
            Category::create([
                'name' => $category[$i],
                'color' => '#FFF'
            ]);
        }

        // Team User
        for ($i = 0; $i < 10; $i++) {
            Team::create([
                'name' => 'Team ' . $faker->firstName(),
                'category_id' => 1,
                'description' => $faker->realText($maxNbChars = 100, $indexSize = 2),
                'status' => 'nonaktif',
                'slug' => 'team-' . $faker->firstName()
            ]);
        }
    }
}
