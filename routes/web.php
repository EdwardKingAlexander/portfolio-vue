<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmailListController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Main Page Routes
|--------------------------------------------------------------------------
|
| Main Page Routes. No login access is needed in order to access these pages
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', AboutController::class)->name('about');

Route::get('/tools', ToolController::class)->name('tools');


/*
|--------------------------------------------------------------------------
| NewsLetter Routes
|--------------------------------------------------------------------------
|
|
*/

Route::post('/email-list', [EmailListController::class, 'store']);


/*
|--------------------------------------------------------------------------
| Front Page Contact form Routes
|--------------------------------------------------------------------------
|
|
*/
Route::post('/contact', [ContactController::class, 'store']);


require __DIR__.'/auth.php';
