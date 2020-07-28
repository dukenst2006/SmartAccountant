<?php

use App\Models\ProductMovementType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

class DatabaseSeeder extends Seeder
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
        ProductMovementType::create([ 'Description'=>'سند صرف بضاعه' ]);

        $QuantityTypeSeeder =new QuantityTypeSeeder();
        $QuantityTypeSeeder->run();


        $PaymentTypesSeeder =new PaymentTypesSeeder();
        $PaymentTypesSeeder->run();




        factory(App\Models\MarketplaceOwner::class, 10)->create();

//      factory(App\Models\Stock::class, 10)->create();

        factory(App\Models\SystemAdmin::class, 2)->create();
        factory(App\Models\Expense::class, 10)->create();
//       factory(App\Models\Supervisor::class, 10)->create();
//       factory(App\Models\Employee::class, 100)->create();
//       factory(App\Models\Stock::class, 30)->create();
//
//
//
//
        factory(App\Models\Product::class, 50)->create();



    }
}
