<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'collector','namespace'=>'PhpUkg\Collector'], function () {
    Route::post('/select', 'UtilsController@select');
    Route::post('/statement', 'UtilsController@statement');
    Route::get('/get-config/{name}', 'UtilsController@getConfig');
    Route::get('/test', 'UtilsController@test');
});
