<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\InvoiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ruta de usuarios
Route::resource('users', UserController::class);
// ruta de categorias
Route::resource('Categories', CategoryController::class);
// ruta de productos
Route::resource('products', ProductController::class);
// ruta de clientes
Route::resource('clients', CustomerController::class);
// ruta de ventas
Route::resource('sales', SaleController::class);
// ruta de factura
Route::resource('invoices', InvoiceController::class);

