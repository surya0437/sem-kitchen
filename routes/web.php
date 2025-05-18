<?php

use App\Http\Controllers\Frontend\InquiryController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\SellEquipmentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/search', [PageController::class, 'search'])->name('search');
Route::get('/products', [PageController::class, 'product'])->name('product');
Route::get('/sell-equipment', [PageController::class, 'sellEquipment'])->name('sell-equipment');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/products/{slug}', [PageController::class, 'productDetail'])->name('single-product');
Route::get('/category/{slug}', [PageController::class, 'categoryWiseProduct'])->name('category-wise-product');
// Route::get('/search', [PageController::class, 'search'])->name('search');
Route::post('/sell-equipment', [SellEquipmentController::class, 'sellEquipmentStore'])->name('sell-equipment.store');

Route::get('/equipment-details/{slug}', [PageController::class, 'equipmentDetail'])->name('equipment-details');

Route::post('/inquiry', [InquiryController::class, 'inquiryStore'])->name('inquiry.store');
