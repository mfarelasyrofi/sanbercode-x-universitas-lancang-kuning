<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\homeController;
use App\Http\Controllers\authController;

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

route::get('/', [homeController::class, 'index']);

route::get('/form', [authController::class, 'form']);

route::post('/home', [authController::class, 'home']);

route::get('/table', function(){
    return view('page.table');
});

route::get('/data-table', function(){
    return view('page.data-table');
});