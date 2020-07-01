<?php

use App\QuantityType;
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
         $QuantityTypeSeeder =new QuantityTypeSeeder();
        $QuantityTypeSeeder->run();


        $PaymentTypesSeeder =new PaymentTypesSeeder();
        $PaymentTypesSeeder->run();

        $PermissionSeeder =new PermissionSeeder();
        $PermissionSeeder->run();



        factory(App\Models\SystemAdmin::class, 2)->create();
        factory(App\Models\Safe::class, 10)->create();
        factory(App\Models\Stock::class, 10)->create();
        factory(App\Models\Supervisor::class, 10)->create();
        factory(App\Models\Employee::class, 100)->create();
        factory(App\Models\Product::class, 50)->create();


//        factory(App\Models\Marketplace::class, 10)->create();
//        factory(App\Models\ProductCategory::class, 10)->create();
//        factory(App\Models\ProductSubCategory::class, 10)->create();
///

    }
}
