<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::get('products',function (){
//    return \App\Models\Product::all();
//})->name('api_products');
//Route::post('newBill','Admin\BillController@newBill')->name('api_new_bill');
//Route::post('moneyBill','Admin\MoneyController@get')->name( 'money_bill');
Route::get('AllMarketPlaces', 'AxiosRequestController@GetAllMarketPlaces')->name('getAllMarkets');
Route::post('Invoices', 'AxiosRequestController@GetInvoices')->name('getInvoices');
Route::post('LastInvoiceNow', 'AxiosRequestController@LastInvoiceNow')->name('LastInvoiceNow');
Route::post('LastInvoice', 'AxiosRequestController@LastInvoice')->name('LastInvoice');


Route::group(['prefix' => 'Admin', 'namespace' => 'Admin'], function () {
    Route::get('ProductLiveSearch', 'ProductController@LiveSearch')->name('product.LiveSearch');
    Route::post('BondsController', 'BondsController@storebondvoucher')->name('bond.store');
    Route::post('StoreSaleInvoice', 'InvoiceController@StoreSaleInvoice')->name('invoice.store');
    Route::get('ProductExport', 'ProductController@export')->name('ProductExport');
    Route::post('ProductImport', 'ProductController@import')->name('ProductImport');


//Chat API
Route::post('conversations', 'ChatController@store');
Route::get('conversations/{conversation}/users', 'ChatController@participants');
Route::post('conversations/{conversation}/users', 'ChatController@join');
Route::delete('conversations/{conversation}/users', 'ChatController@leaveConversation');
Route::get('conversations/{conversation}/messages', 'ChatController@getMessages');
Route::post('conversations/{conversation}/messages', 'ChatController@sendMessage');
Route::delete('conversations/{conversation}/messages', 'ChatController@deleteMessages');

});
