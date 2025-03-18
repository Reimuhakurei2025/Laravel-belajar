<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

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
    return view('about',['name'=>'Zakky Ananda Astqalani Tindoy', 'title'=>'About Me', 'Posts' =>[
    [
    'id'=>'1',
    'Title' => 'SMK (sekolah Menengah Kejuruan)',
    'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nisi illum eveniet delectus facilis eos officia fugiat nihil molestias quis quia atque ad alias minima, nesciunt reiciendis et accusamus ducimus. Illo ad modi ratione ut alias eveniet accusamus ducimus at non suscipit, debitis est aliquid?'
    ]
,
    [
    'id'=>'2',
    'Title' => 'SMP (sekolah Menengah Pertama)',
    "Body"=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio est, ipsa atque distinctio ut non minus maiores eligendi cum delectus. Facilis nesciunt, consequuntur inventore voluptates consequatur tempore ipsa repellendus at.
    Reprehenderit rem eaque laborum eligendi inventore harum quo optio! Reiciendis quidem mollitia quam illum sapiente non nulla, consequatur dicta animi ipsa! Quod unde dolorem quia vel est, a assumenda minima!
    Iure quae doloribus numquam ipsum quam in asperiores necessitatibus deleniti earum error ipsa quasi itaque esse ad aut aliquam eligendi assumenda velit, fuga ratione. Blanditiis totam eos voluptas voluptatibus ratione!'
    ]
]
 ]);
});
Route::get('/about/{id}', function($id) {
$posts =
    [
        [
        'id'=>'1',
        'Title' => 'SMK (sekolah Menengah Kejuruan)',
        'Body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste nisi illum eveniet delectus facilis eos officia fugiat nihil molestias quis quia atque ad alias minima, nesciunt reiciendis et accusamus ducimus. Illo ad modi ratione ut alias eveniet accusamus ducimus at non suscipit, debitis est aliquid?'
        ]
    ,
        [
        'id'=>'2',
        'Title' => 'SMP (sekolah Menengah Pertama)',
        "Body"=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio est, ipsa atque distinctio ut non minus maiores eligendi cum delectus. Facilis nesciunt, consequuntur inventore voluptates consequatur tempore ipsa repellendus at.
        Reprehenderit rem eaque laborum eligendi inventore harum quo optio! Reiciendis quidem mollitia quam illum sapiente non nulla, consequatur dicta animi ipsa! Quod unde dolorem quia vel est, a assumenda minima!
        Iure quae doloribus numquam ipsum quam in asperiores necessitatibus deleniti earum error ipsa quasi itaque esse ad aut aliquam eligendi assumenda velit, fuga ratione. Blanditiis totam eos voluptas voluptatibus ratione!'
        ]
        ];
        $post = Arr::first($posts, function($posts) use ($id){
            return $posts['id'] == $id;
        });
        dd($post);
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
