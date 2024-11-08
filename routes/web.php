<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

    Route::post('/new-spirit', [RoomController::class, 'newbeer'])->name('new-drink');
    Route::get('/new-spirit', [RoomController::class, 'newbeer']);

// edit

    Route::get('/edit-spirit/{$id}', [RoomController::class, 'editdrink']);
    Route::put('/edit-spirit/{$id}', [RoomController::class, 'editdrink'])->name('updateddrink');


// Delete

    Route::get('/delete', [RoomController::class, 'delete'])->name('deleted of the archives');

// Show

    Route::get('/to-show', [RoomController::class, 'listed']);



require __DIR__.'/auth.php';


