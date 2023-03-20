<?php

use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UpdateProfileController;
use App\Http\Controllers\LoginApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('user.landingpage');
});

Route::get('/product', [ProductController::class, 'lpindex']);
// ->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::post('profile/update/{id}', [UpdateProfileController::class, 'update']);

Route::resource('products', ProductController::class);

Route::get('auth/{provider}', [LoginApiController::class, 'redirectToProvider']);

Route::get('auth/{provider}/callback', [LoginApiController::class, 'handleProviderCallback']);

Route::get('/admin', [ProductController::class, 'index'])->middleware(['auth', 'admin'])->name('dashboard');

Route::get('/product/{id}', [ProductController::class, 'lpshow'])->name('lp.show');

Route::get('/favorite/add/{id}', [FavoriteController::class, 'add']);

Route::get('/exportexcel', [ProductController::class, 'exportexcel']);

Route::post('/importexcel', [ProductController::class, 'importexcel']);

Route::get('/search', [ProductController::class, 'search'])->name('search');