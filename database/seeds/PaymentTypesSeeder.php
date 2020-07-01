<?php

use App\Models\PaymentType;
use Illuminate\Database\Seeder;

class PaymentTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentType::create(['Name' => 'Cash', 'Description' => 'Cash']);
        PaymentType::create(['Name' => 'Credit' , 'Description'=>'Credit Card' ]);
        PaymentType::create( ['Name' => 'Bank' , 'Description'=>'Bank Transfer' ]);



    }
}
