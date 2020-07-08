<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


auth()->loginUsingId(1);

Route::get('/seedfresh', function () {
//  \Illuminate\Support\Facades\Artisan::call('migrate:fresh');
    Artisan::call('db:seed');
    return (html_entity_decode('<h1>Migration Complete</h1> <h1>Seeder Complete</h1> <br> <a href="/Admin"> <h1>Go To Dashboard</h1></a>  '));
});


Route::redirect('/', '/Admin');
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
    Route::resource('posts', 'postController');
    Route::resource('settings', 'SettingsController')->except('create', 'edit', 'destroy', 'show', 'store');
    Route::resource('companies', 'CompanyController');
    Route::resource('suppliers', 'SupplierController');





//    Route::get('humanR', 'HumanResourceController@index')->name('human_r');
//    Route::get('StonedAll', 'EmployeeController@stoned')->name('stoned_emps');
//    Route::get('ActiveAll', 'EmployeeController@active')->name('active_emps');
//    Route::post('byBrench', 'EmployeeController@byBrench')->name('brench_emps');
//    Route::get('stoning/{employee}', 'EmployeeController@stoning')->name('stoning');
//    Route::get('activating/{employee}', 'EmployeeController@activating')->name('activating');
//    Route::get('brench/stoning/{brench}', 'BrenchController@stoning')->name('brench_stoning');
//    Route::get('brench/activating/{brench}', 'BrenchController@activating')->name('brench_activating');
//    Route::resource('bills', 'BillController');
//    Route::resource('expenses', 'ExpenseController');
//    Route::resource('expenses-categories', 'ExpensesCategoryController');
//    Route::resource('groups', 'GroupController');
//    Route::resource('products', 'ProductController');
//    Route::get('/money', 'MoneyController@index')->name('money');
//    Route::view('/storage', 'admin.storage.index')->name('storage');
//    Route::get('sub-group/{group}', 'GroupController@getAllSubGroups')->name('getMainGroupSubGroup');
//    Route::get('main-store', 'MainStoreController@index')->name('main-store.index');
//    Route::post('distribute-product/{product}', 'MainStoreController@distribute')->name('distribute-product');

});
