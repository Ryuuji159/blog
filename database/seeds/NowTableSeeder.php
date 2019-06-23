<?php

use Illuminate\Database\Seeder;

class NowTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Post::class, 50)->create();
    }
}
