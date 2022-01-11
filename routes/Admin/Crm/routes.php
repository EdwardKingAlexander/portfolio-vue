<?php

use App\Http\Controllers\Admin\CompanyController;
use App\Http\Controllers\Admin\CrmController;
use App\Http\Controllers\Admin\CustomerController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Customer Relationship Management Routes
|--------------------------------------------------------------------------|
|
*/

Route::get('/admin/crm/companies', [CompanyController::class, 'index'])->name('admin.crm.companies.index');
Route::get('/admin/crm/companies/create', [CompanyController::class, 'create'])->name('admin.crm.companies.create');
Route::get('/admin/crm/companies/{company:slug}', [CompanyController::class, 'show'])->name('admin.crm.companies.show');

Route::post('/admin/crm/companies', [CompanyController::class, 'store'])->name('admin.crm.companies.store');




/*
|--------------------------------------------------------------------------
| Customer Relationship Management Routes
|--------------------------------------------------------------------------|
|
*/


Route::get('/admin/crm', CrmController::class)->name('admin.crm.index');
Route::get('/admin/crm/customers', [CustomerController::class, 'index'])->name('admin.crm.customers.index');

