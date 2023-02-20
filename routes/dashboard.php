<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\DoctorController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'auth'], function(){
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::resource('/dashboard/doctors', DoctorController::class);

Route::get('doctors/trash', [DoctorController::class, 'trash'])->name('doctors.trash');

Route::put('doctor/{doctor}/restore',[DoctorController::class, 'restore'])->name('doctor.restore');

Route::delete('doctor/{doctor}/force-delete', [DoctorController::class, 'forceDelete'])->name('doctor.force-delete');

?>
