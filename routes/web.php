<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalonderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReserveController;
use App\Http\Controllers\StripeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::controller(CalonderController::class)->group(function () {
    Route::get('/calonder', 'index')->name('event.get');
    Route::post('/calonder/store', 'store')->name('event.store');
});
Route::middleware(['role:admin'])->group(function () {
    // Place your admin routes here
});
Route::get('/admin',[AdminController::class ,'index'])->middleware('role:admin');


Route::get('/reserve',[ReserveController::class ,'index'])->name('reserve.index');
Route::post("/admin" , [AdminController::class , "store"])->name("admin.store");


Route::get('/session',[StripeController::class ,'session']);
Route::get('/session',[StripeController::class ,'session'])->name('session');

Route::delete("/reserve/delete/{reserves}" , [ReserveController::class , "dostroy"])->name('reserve.delete');
Route::put("/reserve/update/{resrve}" , [ReserveController::class , "update"])->name("reserve.update");





Route::delete("/admin/delete/{admin}" , [AdminController::class , "destroy"])->name('admin.delete');



Route::post("/reserve/store" , [ReserveController::class , "store"]);
Route::get("/reserve/show" , [ReserveController::class , "show"]);



// Define other routes...

// Define the success route
Route::get('/payment/success', [StripeController::class, 'paymentSuccess'])->name('success');

// Define the dashboard or cancel route if not already defined
// Route::get('/dashboard', [StripeController::class, 'dashboard'])->name('dashboard');

// Add other necessary routes...

require __DIR__.'/auth.php';
