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
Route::get('/admin/crm/companies/{company:slug}', [CompanyController::class, 'show'])->name('admin.crm.companies.show');



/*
|--------------------------------------------------------------------------
| Customer Relationship Management Routes
|--------------------------------------------------------------------------|
|
*/


Route::get('/admin/crm', CrmController::class)->name('admin.crm.index');
Route::get('/admin/crm/customers', [CustomerController::class, 'index'])->name('admin.crm.customers.index');

