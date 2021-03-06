<?php

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

Route::resource('companies', 'CompanyController', [
    'only' => ['index', 'store', 'update', 'destroy']
]);

Route::resource('users', 'UserController', [
    'only' => ['index', 'store', 'update', 'destroy']
]);

Route::get('/report/{month}', 'ReportController@index');
Route::post('/generate', 'GenerateController@transfer');