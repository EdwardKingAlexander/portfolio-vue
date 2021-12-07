<?php

use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Project Management Routes
|--------------------------------------------------------------------------|
|
*/

Route::get('/admin/projects', [ProjectController::class, 'index'])->name('admin.projects.index');
Route::post('/admin/projects', [ProjectController::class, 'store'])->name('admin.projects.store');
Route::get('/admin/projects/{id}', [ProjectController::class, 'show'])->name('admin.projects.show');
Route::get('/admin/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');

