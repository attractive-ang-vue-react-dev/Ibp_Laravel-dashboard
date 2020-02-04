<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\UserController;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('public.index');
});

// Route::get('login', function () {
//     return view('auth.login');
// });

// Route::get('/register', function () {
//     return view('pages.register');
// });



Route::group(['middleware' => ['auth', 'verified']], function () {

    Route::get('/admin', function () {
        return view('admin.pages.profile.profile');
    });
    Route::get('/admin/catalog', 'ProductController@index');
    Route::get('/admin/supplier', 'SupplierController@index');

    Route::post('/supplier/update/{id}','SupplierController@update');

    Route::post('/user/update/{id}', 'UserController@update');

    Route::get('/home', function () {
        return view('admin.pages.profile.profile');
    });

    Route::post('/product/create', 'ProductController@create');
    Route::get('product/edit/{id}', 'ProductController@edit');
    Route::post('product/update/{id}', 'ProductController@update');
    Route::get('product/delete/{id}', 'ProductController@destroy');
    Route::get('lang/{locale}', 'HomeController@lang');
    Route::get('/admin/product/new', function () {
        return view('admin.pages.product.product');
    })->name('new-product');;




});

Auth::routes();

