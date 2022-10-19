<?php

use Illuminate\Support\Facades\Route;
use App\Controllers\ProductControllers;

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

Route::get('/', function() {
    return view('home');
});

Route::get('/user/{name}/{id}', function($name, $id) {
    return '<h2>Displaying user: ' . $name . ' (#' . $id . ')';
});

Route::get('/products/{name}/{id}', function($id) {
    return '<h2>Displaying product:' . ' (#' . $id . ')';
});

Route::get('/home', [PageController::class, 'home']);

Route::get('/products', [ProductsController::class, 'products']);

Route::get('/about', [PageController::class, 'about']);
