<?php

use App\Admin\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', [App\Admin\Http\Controllers\Home\HomeController::class, 'index']);

// Route::get("/topzone-codebase/admin/login",[AdminController::class, 'login'])->name("login");s
