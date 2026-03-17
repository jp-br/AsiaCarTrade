<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/home', [EmployeeController::class, 'home'])->name('my_home');
Route::get('/about', [EmployeeController::class, 'about'])->name('about_us');
Route::get('/store', [EmployeeController::class, 'store'])->name('my_store');
Route::get('/services', [EmployeeController::class, 'services'])->name('my_services');
Route::get('/trade', [EmployeeController::class, 'trade'])->name('my_trade');
Route::get('/bid', [EmployeeController::class, 'bid'])->name('my_bid');
Route::get('/blog', [EmployeeController::class, 'blog'])->name('my_blog');
Route::get('/careers', [EmployeeController::class, 'careers'])->name('my_careers');
Route::get('/contact', [EmployeeController::class, 'contact'])->name('contact_us');

