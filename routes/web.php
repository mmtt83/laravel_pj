<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TalksController;

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

//TOPページ
Route::get('/', function(){
    return view('welcome');
});

//クライアント側：一覧表示
Route::get('/lists', [TalksController::class, 'index']);
//クライアント側：詳細表示
Route::get('/detail/{id}', [TalksController::class, 'show']);


//投稿者用：一覧表示
Route::get('/admin/posts_list', [PostsController::class, 'index']);

//投稿者用：登録画面
Route::get('/admin/posts', [PostsController::class, 'create']);

//投稿者用：登録処理 登録画面
Route::post('/admin/posts', [PostsController::class, 'store']);

//投稿者用：更新画面
Route::get('/admin/posts_edit/{post}',[PostsController::class, 'edit']);

//投稿者用：更新処理
Route::post('/adminposts/update',[PostsController::class, 'update']);

//投稿者用：登録を削除
Route::delete('/admin/post/{post}',[PostsController::class, 'destroy']);

//投稿者用：登録詳細画面
Route::get('/admin/posts_detail/{id}', [PostsController::class, 'show']);

//申し込み
Route::post('detail/{post_id}', [PostController::class,'apply']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
