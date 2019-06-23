<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Post::class, 50)->create();
    }
}
