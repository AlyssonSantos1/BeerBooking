
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
    Route::get('/new-spirit', [RoomController::class, 'sucess']);

// edit

    Route::get('/edit-spirit/{id}', [RoomController::class, 'edit']);
    Route::put('/edit-spirit/{id}', [RoomController::class, 'update'])->name('updateddrink');
    


// Delete

    Route::get('/delete/{id}', [RoomController::class, 'delete'])->name('delete-drink');
    Route::put('/delete/{id}', [RoomController::class, 'trash'])->name('excluded-drink');

// Show

    Route::get('/to-show', [RoomController::class, 'list'])->name('listallbeers');

// Show only beer in the book

    Route::get('/to-show/{id}', [RoomController::class, 'listone'])->name('listed-unit');




require __DIR__.'/auth.php';


