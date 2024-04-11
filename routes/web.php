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
    return view('index');
});

Route::get('/manga', function () {
    return view('list_manga');
});

Route::get('/a-z', function () {
    return view('list_manga_alphabet');
});

Route::get('/genre', function () {
    return view('list_manga_genre');
});

Route::get('/bookmark', function () {
    return view('bookmark');
});

Route::get('/blogs', function () {
    return view('blog');
});

Route::get('/blog-detail', function () {
    return view('blog_detail');
});

Route::get('/manga-detail', function () {
    return view('manga_detail');
});

Route::get('/reading', function () {
    return view('reading');
});


