<?php

use Illuminate\Database\Seeder;

class NowTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Now::class, 50)->create();
    }
}
