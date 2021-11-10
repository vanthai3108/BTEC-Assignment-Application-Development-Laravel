<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\AdminRoleController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminTopicController;

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

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'block', 'role:Admin,Training staff']], function(){
    Route::get('/home', [App\Http\Controllers\Admin\AdminHomeController::class, 'index'])->name('admin');
    Route::resource('/user', AdminUserController::class)->names('admin.users');
    Route::get('/user/block/{user}', [AdminUserController::class, 'blockUser'])->name('admin.user.block');
    Route::get('/users/unblock/{user}', [AdminUserController::class, 'unblockUser'])->name('admin.user.unblock');
    // Route::resource('/role', AdminRoleController::class)->names('admin.roles');
    Route::resource('/topic', AdminTopicController::class)->names('admin.topics');
    Route::resource('/category', AdminCategoryController::class)->names('admin.categories');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'block', 'role:Admin']], function(){
    Route::resource('/role', AdminRoleController::class)->names('admin.roles');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('block');
