<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
       for($i = 0; $i < 15; $i++){
        $new_project = new Project();
        $new_project->title = $faker->sentence();
        $new_project->description = $faker->paragraph();
        $new_project->save();
       }
    }
}
