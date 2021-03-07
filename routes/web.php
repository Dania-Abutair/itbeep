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


// Route::get('/', function () {
//     return view('index');
// });

Route::get('/','ServiceController@index');
Route::get('/services','ServiceController@ReadServices');
Route::get('/interest','InterestController@ReadInterest');
Route::get('/send-email','MailController@sendEmail');

?>