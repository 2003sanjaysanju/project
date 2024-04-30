<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FeedbackController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('customer.index');
});

Route::get('/dashboard', function () {
    return to_route('customer.index');
    
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('customer', CustomerController::class);

});
Route::post('feedback/store', [FeedbackController::class, 'store'])->name('feedback.store');
Route::get('feedback/view', [FeedbackController::class, 'view'])->name('feedback.view');

Route::post('store', [CustomerController::class, 'store'])->name('customer.store');
Route::get('check', [CustomerController::class, 'check'])->name('customer.check');
Route::post('check-slote', [CustomerController::class, 'checkSlote'])->name('customer.checkSlote');
Route::get('about', [CustomerController::class, 'about'])->name('customer.about');
Route::post('cancel', [CustomerController::class, 'cancel'])->name('customer.cancel');
Route::get('services', [CustomerController::class, 'services'])->name('customer.services');
Route::get('contact', [CustomerController::class, 'contact'])->name('customer.contact');
Route::get('gallery', [CustomerController::class, 'gallery'])->name('customer.gallery');
require __DIR__.'/auth.php';
