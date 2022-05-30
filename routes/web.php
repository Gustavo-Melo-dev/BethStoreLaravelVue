<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/product', function () {
    return Inertia::render('ProductForm', [
        'canCreateUsers' => Auth::user()->can('create', User::class),
        'users' => User::all()
    ]);
})->middleware(['auth', 'verified'])->name('product');

Route::post('/product', [ProductController::class, 'store'])->middleware(['auth', 'verified']);

Route::get('/catalog', function () {
    return Inertia::render('Catalog', [
        'products' => Product::all(),
    ]);
})->middleware(['auth', 'verified'])->name('catalog');

Route::get('/about', function () {
    return Inertia::render('About');
})->middleware(['auth', 'verified'])->name('about');

require __DIR__.'/auth.php';
