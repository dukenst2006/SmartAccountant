<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\{Role,Permission};
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $SystemAdminRole= Role::create(['name' => 'SystemAdmin']);

        $MarketplaceOwner= Role::create(['name' => 'MarketplaceOwner']);

        $MarketplaceOwner= Role::create(['name' => 'Supervisors']);

        $Employee= Role::create(['name' => 'Employee']);
l


        Permission::create(['name' => 'products']);
        Permission::create(['name' => 'Invoices']);
        Permission::create(['name' => 'Employee']);
        Permission::create(['name' => 'Marketplaces']);




    }
}
