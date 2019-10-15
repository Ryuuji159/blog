<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(PostTableSeeder::class);
        $this->call(NowTableSeeder::class);
        $this->call(SetupTableSeeder::class);
        $this->call(ProjectTableSeeder::class);
    }
}
