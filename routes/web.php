<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SophiaController;
use Illuminate\Support\Facades\Route;
use Sven\ArtisanView\Destroyer;

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

// ====== Product ==========

Route::get('/', [SophiaController::class, 'home'])->name('sophia.home');
Route::get('/women', [SophiaController::class, 'womenPage'])->name('sophia.womenPage');
Route::get('/man', [SophiaController::class, 'manPage'])->name('sophia.manPage');
Route::get('/accessories', [SophiaController::class, 'accessoriesPage'])->name('sophia.accessoriesPage');
Route::get('/about', [SophiaController::class, 'aboutPage'])->name('sophia.aboutPage');

Route::get('/{id}', [SophiaController::class, 'show'])->name('product.show');
// ====== Cart ==========
Route::get('/cart/{cart}/add', [CartController::class, 'add'])->name('cart.add');


// ========== ADMIN ============================

Route::group(['middleware' => ['auth'], 'prefix' => 'admin'], function() {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Add more routes for admin here
});


// ========== CUSTOMERS ========================
Route::get('/acount', [SophiaController::class, 'account'])->name('sophia.account');
Route::get('/login', [SophiaController::class, 'login'])->name('auth.login');
Route::get('/register', [SophiaController::class, 'logout'])->name('auth.register');


// Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
// Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');
// Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
// Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');
// Route::put('/customers/{customer}', [CustomerController::class, 'update'])->name('customers.update');
// Route::get('/customers/{customer}/edit', [CustomerController::class, 'edit'])->name('customers.edit');

// Route::delete('/customers/{id}', [CustomerController::class, 'destroyConfirmed'])->name('customers.destroyConfirmed');
// Route::get('/customers/{id}/delete', [CustomerController::class, 'destroy'])->name('customers.destroy');


// ==================================================================
// // ====== Laravel Default ===========
// Route::get('/lara', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
