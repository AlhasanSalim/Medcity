<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\DoctorController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    });

Route::resource('/dashboard/doctors', DoctorController::class);
?>
