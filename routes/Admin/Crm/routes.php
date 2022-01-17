<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CompanyNoteController;
use App\Http\Controllers\Admin\CrmController;
use App\Http\Controllers\Admin\CustomerController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Company Management Routes
|--------------------------------------------------------------------------|
|
*/

Route::get('/admin/crm/companies', [CompanyController::class, 'index'])->name('admin.crm.companies.index');
Route::get('/admin/crm/companies/create', [CompanyController::class, 'create'])->name('admin.crm.companies.create');
Route::post('/admin/crm/companies', [CompanyController::class, 'store'])->name('admin.crm.companies.store');
Route::get('/admin/crm/companies/{company:slug}', [CompanyController::class, 'show'])->name('admin.crm.companies.show');
Route::delete('/admin/crm/companies/{company:slug}', [CompanyController::class, 'destroy'])->name('admin.crm.companies.destroy');

/*
|--------------------------------------------------------------------------
| Customer Notes Routes
|--------------------------------------------------------------------------|
|
*/


Route::post('/admin/crm/companies/{company:slug}/notes', [CompanyNoteController::class, 'store'])->name('admin.crm.companies.notes.store');
Route::delete('/admin/crm/companies/{company:slug}/notes/{id}', [CompanyNoteController::class, 'destroy'])->name('admin.companies.notes.destroy');




/*
|--------------------------------------------------------------------------
| CRM Routes
|--------------------------------------------------------------------------|
|
*/


Route::get('/admin/crm', CrmController::class)->name('admin.crm.index');

/*
|--------------------------------------------------------------------------
| Customer Relationship Management Routes
|--------------------------------------------------------------------------|
|
*/
Route::get('/admin/crm/customers', [CustomerController::class, 'index'])->name('admin.crm.customers.index');

