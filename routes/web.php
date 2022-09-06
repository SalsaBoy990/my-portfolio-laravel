<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\LandingController;

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

Route::get('/', [LandingController::class, 'index'])->name('landing.page');

/* Get language, set language in session */
Route::get('lang/{locale}', [LocalizationController::class, 'index'])->name('lang.index');


// Routes only for authenticated users...
Route::group(
    ['middleware' => ['auth:sanctum', config('jetstream.auth_session'), 'verified'], 'prefix' => 'admin'],
    function () {
        Route::get('dashboard', function () {
            return view('admin/dashboard');
        })->name('dashboard');

        Route::get('meta', [MetaController::class, 'index'])->name('meta.index');
        Route::put('meta/{meta}', [MetaController::class, 'update'])->name('meta.update');

        Route::get('user', [UserController::class, 'index'])->name('user.index');
        Route::post('user', [UserController::class, 'store'])->name('user.store');
        Route::get('user/create', [UserController::class, 'create'])->name('user.create');
        Route::delete('user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    }
);
