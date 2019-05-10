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

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('product_discount');
});

Route::post('/product_discount',function (Illuminate\Http\Request $request){
    $productDescription = $_POST['productDescription'];
    $price = $_POST['price'];
    $discountPercent = $_POST['discountPercent'];
    $discountAmount = ($price*$discountPercent)/100;
    $discountPrice = $price - $discountAmount;
    return view('show_discount_amount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
} );