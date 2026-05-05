<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard', [
        'totalProducts' => Product::count(),
        'activeProducts' => Product::where('is_active', true)->count(),
        'totalStock' => Product::sum('stock'),
    ]);
})->name('dashboard');

Route::view('/kontak', 'contact')->name('contact');

Route::resource('products', ProductController::class);
