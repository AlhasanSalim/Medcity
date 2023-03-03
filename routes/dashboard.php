<?php

use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dashboard\DoctorController;
use App\Http\Controllers\Dashboard\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::group(['middleware' => 'auth'], function(){

    // Dashboard Control :
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');



    // Doctors Control:

    // Route::resource('/dashboard/doctors', DoctorController::class);
    Route::get('/dashboard/doctors/index', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('/dashboard/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
    Route::post('/dashboard/doctors/store', [DoctorController::class, 'store'])->name('doctors.store');
    Route::get('/dashboard/doctors/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
    Route::put('/dashboard/doctors/{doctor}/update', [DoctorController::class, 'update'])->name('doctors.update');
    Route::delete('/dashboard/doctors/{doctor}/destroy', [DoctorController::class, 'destroy'])->name('doctors.destroy');
    Route::get('/dashboard/doctors/trash', [DoctorController::class, 'trash'])->name('doctors.trash');
    Route::put('/dashboard/doctors/{doctor}/restore',[DoctorController::class, 'restore'])->name('doctors.restore');
    Route::delete('/dashboard/doctors/{doctor}/force-delete', [DoctorController::class, 'forceDelete'])->name('doctors.force-delete');


    // Categories Control:

    // Route::resource('/dashboard/categories', CategoryController::class);
    Route::get('/dashboard/categories/index', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/dashboard/categories/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/dashboard/categories/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/dashboard/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/dashboard/categories/{category}/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/dashboard/categories/{category}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::get('/dashboard/categories/trash', [CategoryController::class, 'trash'])->name('categories.trash');
    Route::put('/dashboard/categories/{category}/restore', [CategoryController::class, 'restore'])->name('categories.restore');
    Route::delete('/dashboard/categories/{category}/force-delete', [CategoryController::class, 'forceDelete'])->name('categories.force-delete');

});

?>
