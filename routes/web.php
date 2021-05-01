<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now post something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function (){
    return view('admin.dashboard');
});

Route::get('/dashboard/post/list',function (){
    return view ('admin.post.index');
});

Route::get('/dashboard/post/create',function (){
   return view('admin.post.create');
});

Route::post('/dashboard/post/create',[PostController::class,'store']);
