<?php

use App\QuantityType;
use Illuminate\Database\Seeder;

class QuantityTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        QuantityType::create(['Name' => 'Piece' ]);
        QuantityType::create(['Name' => 'Carton' ]);
        QuantityType::create(['Name' => 'Grain' ]);


    }
}
