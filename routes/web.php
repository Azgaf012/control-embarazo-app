<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\indexController;
use App\Http\Controllers\admin\PostController as AdminPostController;
use App\Http\Controllers\admin\user\InformationPersonalController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Admin\CategoryController as CategoryController;
use App\Http\Controllers\Admin\TagController;

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

Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/post', function () {
    return view('web.blog.post');
})->name('post');

Route::group(['prefix'=>'admin'],function(){
    Route::get('Panel-Administrativo',[indexController::class, 'index'])->name('dashboard');
    Route::get('Informacion-personal',[InformationPersonalController::class, 'index'])->name('informationPersonal');
    Route::resource('posts',AdminPostController::class)->names('admin.posts');
    Route::resource('categories',CategoryController::class)->names('admin.categories');
    Route::resource('tags',TagController::class)->names('admin.tags');
});


Route::get('storage-link', function(){
    Artisan::call('storage:link');
    Artisan::call('optimize:clear');
    Artisan::call('config:cache');
});

