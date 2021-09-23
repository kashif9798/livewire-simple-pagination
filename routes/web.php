<?php

use Illuminate\Support\Facades\Route;
use Bytecity\Tylersoft\Facade\Tylersoft;

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
    $id_s = [1, 2, 3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21];

    return view('welcome', [
        'id_s' => $id_s
    ]);
});




Route::get('/a', function () {
    $data = [
        "amount" => 11,
        "accountno" => 26777063984,
        "msisdn" => 26777063984,
        "currencycode" => "BWP",
        "name" => "Mompati Mokoka",
        "transactionid" => "TRX_0008786707"
    ];

    return Tylersoft::request($data, true);
});