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
Route::get('/admin/projects/create', [ProjectController::class, 'create'])->name('admin.projects.create');
Route::get('/admin/projects/{project}', [ProjectController::class, 'show'])->name('admin.projects.show');
Route::patch('/admin/projects/{project}', [ProjectController::class, 'update'])->name('admin.projects.update');
Route::get('/admin/projects/{id}/edit', [ProjectController::class, 'edit'])->name('admin.projects.edit');
Route::delete('/admin/projects/{project}', [ProjectController::class, 'destroy'])->name('admin.projects.destroy');


