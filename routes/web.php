<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsBlogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', function () {
    $categories = Category::all();  
    return view('about', compact('categories'));
});

Route::get('/about/our-company', function () {
    $categories = Category::all();  
    return view('about.company', compact('categories'));
});
Route::get('/about/our-customers', function () {
    $categories = Category::all();  
    return view('about.customers', compact('categories'));
});
Route::get('/about/news', [NewsBlogController::class, 'index'])->name('news.index');
Route::get('/about/news/{id}', [NewsBlogController::class, 'show'])->name('news.show');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/category/{category}', [ProductController::class, 'category'])->name('products.category');
Route::get('/products/category/{categoryId}/{subCategoryId}', [ProductController::class, 'subCategory'])->name('products.subcategory');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('/services', function () {
    $categories = Category::all();  
    return view('services', compact('categories'));
});
Route::get('/contacts', function () {
    $categories = Category::all();  
    return view('contacts', compact('categories'));
});




Route::get('/dashboard', function () {
    $categories = Category::all();
    return view('dashboards.dashboard', compact('categories'));
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
