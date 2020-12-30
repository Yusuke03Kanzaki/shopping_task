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

// use Illuminate\Routing\Route;

Route::get('/', 'CheckoutController@index'); //アクセス時にホームページを表示
Route::get('checkout', 'CheckoutController@checkout');  //checkoutページを表示
Route::get('total', 'CheckoutController@total');  //投稿処理。セッション管理。
Route::post('buy', 'CheckoutController@buy');  //投稿処理。セッション管理。
Route::post('cart', 'CheckoutController@cart'); //カートへ商品を追加する
Route::post('delete', 'CheckoutController@delete');  //投稿処理。セッション管理。
