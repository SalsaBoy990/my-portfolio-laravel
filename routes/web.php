<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MetaController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use Illuminate\Support\Facades\Artisan;

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
        Route::get('meta/{meta}/edit', [MetaController::class, 'edit'])->name('meta.edit');
        Route::put('meta/{meta}', [MetaController::class, 'update'])->name('meta.update');

        Route::get('skill', [SkillController::class, 'index'])->name('skill.index');
        Route::post('skill', [SkillController::class, 'store'])->name('skill.store');
        Route::get('skill/create', [SkillController::class, 'create'])->name('skill.create');
        Route::get('skill/{skill}/edit', [SkillController::class, 'edit'])->name('skill.edit');
        Route::put('skill/{skill}', [SkillController::class, 'update'])->name('skill.update');
        Route::delete('skill/{skill}', [SkillController::class, 'destroy'])->name('skill.destroy');

        Route::get('project', [ProjectController::class, 'index'])->name('project.index');
        Route::post('project', [ProjectController::class, 'store'])->name('project.store');
        Route::get('project/create', [ProjectController::class, 'create'])->name('project.create');
        Route::get('project/{project}/edit', [ProjectController::class, 'edit'])->name('project.edit');
        Route::put('project/{project}', [ProjectController::class, 'update'])->name('project.update');
        Route::delete('project/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');

        Route::get('user', [UserController::class, 'index'])->name('user.index');
        Route::post('user', [UserController::class, 'store'])->name('user.store');
        Route::get('user/create', [UserController::class, 'create'])->name('user.create');
        Route::delete('user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

        Route::get('/symlink', function () {
            //Artisan::call('storage:link');

            // https://dumpcoder.com/symlink-laravel-storage-folder-on-shared-hosting/

            // the webroot is in the public folder now (it is not the best solution)
            // so the paths to the target and link needs to be fixed
            $documentRoot = str_replace('public/', '', $_SERVER['DOCUMENT_ROOT']);
            $target = $documentRoot . 'storage/app/public';
            $link = $documentRoot . 'public/storage';

            symlink($target, $link);
            echo "Done";
        });
    }
);
