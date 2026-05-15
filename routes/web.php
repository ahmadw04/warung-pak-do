<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response('OK', 200);
})->name('health');

Route::get('/', function () {
    try {
        $totalProducts = Product::count();
        $activeProducts = Product::where('is_active', true)->count();
        $totalStock = Product::sum('stock');
    } catch (QueryException) {
        $totalProducts = 0;
        $activeProducts = 0;
        $totalStock = 0;
    }

    return view('dashboard', [
        'totalProducts' => $totalProducts,
        'activeProducts' => $activeProducts,
        'totalStock' => $totalStock,
    ]);
})->name('dashboard');

Route::view('/kontak', 'contact')->name('contact');

Route::get('/menu', function () {
    return view('menu', [
        'menuGroups' => config('warung_menu'),
    ]);
})->name('menu');

Route::resource('products', ProductController::class);
