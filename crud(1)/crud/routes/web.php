<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ProductController;
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
//get delam kano
 Route::get("/",[ProductController::class,"home"]);
 Route::get('/addProduct',[ProductController::class,'addProduct'])->name("addProduct");
 Route::POST('/productStor',[ProductController::class,'productStor'])->name("productStor");
 Route::get('/showProduct',[ProductController::class,'showProduct'])->name("showProduct");
 Route::get('/editproduct/{id}',[ProductController::class,'editproduct'])->name("editproduct");

// Route::get('/', function () {
//     return view('welcome');
// });
