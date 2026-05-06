<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response('OK', 200);
})->name('health');

Route::get('/', function () {
    return view('dashboard', [
        'totalProducts' => Product::count(),
        'activeProducts' => Product::where('is_active', true)->count(),
        'totalStock' => Product::sum('stock'),
    ]);
})->name('dashboard');

Route::view('/kontak', 'contact')->name('contact');

Route::resource('products', ProductController::class);
