<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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





Route::get('/', function () {
    return view('home', ['name'=>' Zakky Ananda Astqalani Tindoy', 'title'=>'Home' ]);
});
Route::get('/about', function () {
    return view('about',['name'=>'Zakky Ananda Astqalani Tindoy', 'title'=>'About Me', 'Posts' => Post::all()
 ]);
});
Route::get('/about/{slug}', function($slug) {
        $post = Post::find($slug);

        return view('post',['title'=>'single_post', 'post'=>$post]);

});


Route::get('/galery', function () {
    return view('galery', ['name'=>'Zakky Ananda Astqalani Tindoy', 'title'=>'Galery']);
});
Route::get('/contact', function () {
    return view('contact',['name'=>'Zakky Ananda Astqalani Tindoy', 'title'=>'Galery']);
});
Route::get('/masadmin', function () {
    return view('Dashboard');
});
