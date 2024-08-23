<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Models\Admin;
use App\Models\Branch;
use App\Models\Customer;

Route::get('/', function () {
    return view('welcome');
});
//product dashboard
Route::get('product-list', [ProductController::class, 'index']);
Route::get('product-add', [ProductController::class, 'add']);
Route::get('product-delete/{id}', [ProductController::class, 'delete']);
Route::get('product-edit', [ProductController::class, 'edit']);
Route::post('product-update', [ProductController::class, 'update']);
Route::post('product-save', [ProductController::class, 'save'] );

//admin dashboard
Route::get('admin/index', [AdminController::class, 'dashboard']);
Route::get('admin/customer-list', [AdminController::class, 'customerList']);
Route::get('admin/login', [AdminController::class, 'login']);
Route::get('admin/login', [AdminController::class, 'login'])->name('admin-login');
Route::post('admin/loginProcess', [AdminController::class, 'loginProcess']);

// //category dashboard
Route::get('category-list', [CategoryController::class, 'index']);
Route::get('category-add', [CategoryController::class, 'add']);
Route::get('category-delete/{id}', [CategoryController::class, 'delete']);
Route::get('category-edit', [CategoryController::class, 'edit']);
Route::post('category-update', [CategoryController::class, 'update']);
Route::post('category-save', [CategoryController::class, 'save'] );

// //branch dashboard
Route::get('branch-list', [BranchController::class, 'index']);
Route::get('branch-add', [BranchController::class, 'add']);
Route::get('branch-delete/{id}', [BranchController::class, 'delete']);
Route::get('branch-edit', [BranchController::class, 'edit']);
Route::post('branch-update', [BranchController::class, 'update']);
Route::post('branch-save', [BranchController::class, 'save']);

// //customer dashboard
Route::get('customer/index', [CustomerController::class, 'index'] )->name('customer-index');
Route::get('customer/product', [ProductController::class, 'index'] )->name('customer-product');
Route::get('customer-delete/{id}', [CustomerController::class, 'delete']);
Route::get('customer/login', [CustomerController::class, 'login'] )->name('customer-login');
Route::get('customer/register', [CustomerController::class, 'register'])->name('customer-register');
Route::post('customer/loginProcess', [CustomerController::class, 'loginProcess'] )->name('customer-loginprocess');
Route::post('customer/processRegister',[CustomerController::class , 'processRegister']);
Route::get('customer/logout', [CustomerController::class, 'login'] )->name('customer-logout');
