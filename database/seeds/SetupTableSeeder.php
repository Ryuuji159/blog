<?php

use Illuminate\Database\Seeder;

class SetupTableSeeder extends Seeder
{
    public function run()
    {
        factory(App\Setup::class, 50)->create();
    }
}
