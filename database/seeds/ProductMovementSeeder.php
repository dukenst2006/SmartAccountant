<?php

use App\Models\ProductMovementType;
use Illuminate\Database\Seeder;

class ProductMovementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductMovementType::create(['Description' => 'من المخزن الرئيسي الي مخزن الفرع']);
        ProductMovementType::create([ 'Description'=>'من مخزن الفرع الي المخزن الرئيسي' ]);

    }
}
