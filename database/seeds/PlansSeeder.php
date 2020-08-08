<?php

use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $PremiumPlan= app('rinvex.subscriptions.plan')->create([
            'name' => "Premium Package",
            'description' => "Unlimited",
            'price' => 6,
            'signup_fee' => 0,
            'invoice_period' => 1,
            'invoice_interval' => 'month',
            'sort_order' => 2,
            'currency' => 'USD',
        ]);


        $PremiumPlan->features()->saveMany([
            new PlanFeature(['name' => 'test', 'value' => 'Unlimited', 'sort_order' => 1]),

        ]);

    }
}
