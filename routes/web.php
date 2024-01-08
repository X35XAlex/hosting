<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('glavnaya',function(){
return view('index');
});
Route::get('About','AboutUsController@index');
Route::get('about_test','MyPlaceController@index');
Route::get('novosti','NovostiController@index');
Route::get('our_command', 'OurCommandController@index');
Route::get('portfolio','PortfolioController@index');
Route::get('Nachalo_urokov','NachaloUrokovController@index');
Route::get('Ceny','CenyController@index');
Route::get('partner','PartnerController@index');
Route::get('Uslugi','UslugiController@index');
Route::get('Base','BazaController@index');
Route::get('/portfolios','PortfolioController@index');
Route::get('Testy','TestyController@index');
Route::get('Polzovately', 'PolsovatelController@index');
Route::get('cveta','CvetController@index');
Route::get('Tovar',"TovarController@index");
Route::get('/Tovar/create','TovarController@create');
Route::get('/post','PostController@index');
Route::get('/post/create','PostController@create');
Route::get('/post/update','PostController@update');
Route::get('/post/delete','PostController@delete');
Route::get('/post/restore','PostController@restore');
Route::get('/post/first_Or_Create','PostController@firstOrCreate');
Route::get('news', 'NovostiController@index');
Route::get('news-create', 'NovostiController@create');




