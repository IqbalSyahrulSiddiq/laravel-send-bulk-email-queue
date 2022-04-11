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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Send single receiver
Route::get('send-email', function(){
	$send_mail = 'ikbalmuhammad53@gmail.com';
    dispatch(new App\Jobs\SendEmailJob($send_mail));
    dd('send mail successfully !!');
});

//Send bulk / multiple receiver
Route::get('send-email-bulk','SendemailController@sendEmailBulk')->name('sendEmail.bulk');
