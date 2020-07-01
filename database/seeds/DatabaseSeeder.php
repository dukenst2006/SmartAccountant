<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */





    public function run()
    {



        factory(App\Models\SystemAdmin::class, 10)->create();

    }
}
