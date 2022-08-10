<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin_panel', [App\Http\Controllers\AdminController::class, 'index']);
Route::get('admin_panel/admin_blog_list', [App\Http\Controllers\BlogListController::class, 'index']);

Route::get('admin_panel/add_blog', [App\Http\Controllers\AddBlogCcontroller::class, 'index']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
