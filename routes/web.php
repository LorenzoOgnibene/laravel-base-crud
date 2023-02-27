<?php

use App\Http\Controllers\Admin\BookController as AdminBookController;
use App\Http\Controllers\Guest\GuestBookController as GuestBookController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

// FRONT PAGE
Route::resource('/books', GuestBookController::class);


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/books/trashed', [AdminBookController::class, 'trashed'])->name('trashed-books');
    Route::post('/books/{book}/restore', [AdminBookController::class, 'restore'])->name('restore-book')->withTrashed();
    Route::post('/restore-all', [AdminBookController::class, 'restoreAll'])->name('restore-all-books');
    Route::delete('/books/{book}/force-delete', [AdminBookController::class, 'forceDelete'])->name('force-delete-book')->withTrashed();

    Route::resource('/books', AdminBookController::class);
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
