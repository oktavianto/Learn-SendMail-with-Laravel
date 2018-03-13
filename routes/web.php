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

Route::post('kirim', function() {
      $data = array(
        'isi' => Request::get('message'),
      );
      Mail::send('email', $data, function($message) {
        $message->from('excel@oktavianto.id', 'Excel Dwi Oktvianto');
        $message->to(Request::get('email'))->subject('Belajar SendGrid Euy!');
      });
      dd('Berhasil Dikirim.');
})->name('kirim');
