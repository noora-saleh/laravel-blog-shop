<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;


use App\Http\Controllers\ArticleController;

Route::resource('articles', ArticleController::class);
/*
use App\Http\Controllers\NoticeController;

// إنشاء الـ 7 مسارات الأساسية بكلمة واحدة
Route::resource('notices', NoticeController::class);

use App\Http\Controllers\NameController; 

Route::get('/names', [NameController::class, 'index'])->name('names.index');
*/
/*
Route::resource('Home', HomeController::class);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/add', function () {
    return view('hello');
});
Route::get('/', function () {
    return 'مرحباً بك في موقعنا!';
});

Route::get('/about', function () {
    return 'هذه صفحة من نحن.';
});
// 1. معامل إلزامي: {id} يجب أن يمرر في الرابط
Route::get('/post/{id}', function ($id) {
    return 'عرض المقال رقم: ' . $id;
});

// 2. معامل اختياري: {name?} ينتهي بـ ? وله قيمة افتراضية
Route::get('/user/{name?}', function ($name = 'زائر') {
    return 'أهلاً بك يا: ' . $name;
});


// 1. مسار لعرض قائمة المقالات مع إعطائه اسماً مستعاراً
Route::get('/all-articles-list', [PostController::class, 'index'])->name('posts.index');

// 2. مسار الصفحة الرئيسية
Route::get('/hello', function () {
    return view('hello');
});
Route::get('/posts', [PostController::class, 'index']); 
Route::get('/users', [UserController::class, 'index']);

*/
