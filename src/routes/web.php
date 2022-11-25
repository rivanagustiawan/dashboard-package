<?php 

use Rivan\Dashboard\Http\Controllers\DashboardController;



Route::group(['namespace' => 'Rivan\Dashboard\Http\Controllers','middleware' => 'web'], function () {
    
    Route::get('/dashboard', [DashboardController::class , 'index']);

    Route::get('/data-barang', [DashboardController::class , 'dataBarang']);

    Route::post('/show-barang', [DashboardController::class , 'getBarang']);

});


?>