<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get("/create", [ProductController::class, "create"]);
    Route::get('/product/{productId}', [ProductController::class, "getProductById"]);
    Route::post("/createNewProduct", [ProductController::class, "createNewProduct"]);
    Route::delete("/deleteproduct/{id}", [ProductController::class, "deleteProduct"]);
    Route::get("/editproduct/{id}", [ProductController::class, 'edit']);
    Route::put("/edit/{id}", [ProductController::class, "updateProduct"]);
    Route::get("/allproducts", [ProductController::class, "getAllProducts"]);
});
require __DIR__ . '/auth.php';
