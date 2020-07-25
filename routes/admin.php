<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


//Route::get('/seedfresh', function () {
////  \Illuminate\Support\Facades\Artisan::call('migrate:fresh');
//    Artisan::call('db:seed');
//    return (html_entity_decode('<h1>Migration Complete</h1> <h1>Seeder Complete</h1> <br> <a href="/Admin"> <h1>Go To Dashboard</h1></a>  '));
//});
//

Route::get('/text', function (){
   return view('home');
});


Route::get('lang/{Language}', 'LocalizationController@index')->name('ChangeLanguage');
Route::group(['prefix' => 'Admin'], function () {
//'middleware' => ['role:super-admin'] ,
    Route::get('/', 'HomeController@index')->name('Home');
    Route::get('About', 'AboutController@index')->name('About');
    Route::resource('supervisors', 'SupervisorController');
    Route::resource('employees', 'EmployeeController');
    Route::resource('marketplaces', 'MarketplaceController');
    Route::resource('products', 'ProductController');
    Route::resource('productCategories', 'ProductCategoriesController');
    Route::resource('productSubCategories', 'ProductSubCategoryController');
    Route::get('safe', 'SafeController@index')->name('safe');
    Route::resource('productCategories', 'ProductCategoryController');
    Route::resource('productSubCategories', 'ProductSubCategoryController');
    Route::resource('expenses', 'ExpenseController');
    Route::resource('expensesCategories', 'ExpensesCategoryController');
    Route::resource('expensesSubCategories', 'ExpensesSubCategoryController');
    Route::resource('settings', 'SettingsController')->except('create', 'edit', 'destroy', 'show', 'store');
    Route::resource('companies', 'CompanyController');
    Route::resource('suppliers', 'SupplierController');
    Route::get('chat', function (){return view('admin.Messages.chat');})->name('chat');

    Route::get('sale-invoices', 'InvoiceController@saleInvoicesIndex')->name('invoice.all');
    Route::get('show-sale-invoice/{invoice}', 'InvoiceController@showsaleInvoicesDetails')->name('sale_invoice.show');
    Route::get('invoicerawcreatesale', 'InvoiceController@sale')->name('invoice.createsale');
    Route::post('storesaleinvoice', 'InvoiceController@storeSaleInvoice')->name('invoice.storesaleinvoice');
    Route::get('invoicerawall', 'InvoiceController@showRawInvoices')->name('invoice.invoicerawall');
    Route::get('invoiceraw', 'InvoiceController@raw')->name('invoice.createraw');
    Route::post('invoiceraw/store', 'InvoiceController@StoreRawInvoice')->name('invoice.storerowinvoice');
    Route::get('invoiceraw/{id}/delete', 'InvoiceController@deleterRawInvoice')->name('admin.delete.rawInvoice');



    Route::get('treasure', 'TreasureController@index')->name('treasure');
    Route::get('MainStock', 'StockController@index')->name('mainstock');
    Route::get('MarketplacesStocks', 'StockController@MarketplacesStocks')->name('marketplacesstocks');
    Route::resource('inventories', 'InventoryController')->only(['show', 'index']);
    Route::resource('warehouses', 'WarehouseController')->only(['show', 'index']);


    Route::resource('EmployeeSalary', 'EmployeeSalaryController');

    // BondVoucher
    Route::get('BondVoucher', 'BondsController@BondVoucher')->name('bondsvoucher.create');
    Route::post('BondVoucher/Store', 'BondsController@storeBondVoucher')->name('bondsvoucher.store');

    // BondAmmount
    Route::get('BondAmmount', 'BondsController@CreateBondAmmount')->name('bondsammout.create');
    Route::post('BondAmmount/Store', 'BondsController@storeBondAmmount')->name('bondsammout.store');


    Route::group(['namespace' => '\App\Http\Controllers\Reports'], function () {

        Route::get('ProductReport', 'ProductReportController@index')->name('productreport');
        Route::get('MarketplacesReport', 'MarketplacesReportController@index')->name('marketplacesreport');
        Route::get('EmployeesReport', 'EmployeesReportController@index')->name('employeesreport');
        Route::get('FinancialReport', 'FinancialReportController@index')->name('financialreport');
        Route::get('MostActiveReport', 'MostActiveReportController@index')->name('mostactivereport');
        Route::get('BondsReport', 'BondsReportController@index')->name('bondsreport');
        Route::get('ExpensesReport', 'ExpensesReportController@index')->name('expensesreport');



    });

    Route::get('ProductExport','ProductController@export')->name('ProductExport');
});
