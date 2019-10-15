<?php

use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Project::class, 50)->create();
    }
}
