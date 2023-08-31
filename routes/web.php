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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('home',[
        "title"=>"Home",
    ]);
});
Route::get('/about', function () {
    return view('about',[
        "title"=>"About",
        "name" => "Muhammad Haidar Shahab",
        "email" => "gshaidar6@gmail.com",
        "image" => "pasfoto.jpg"
    ]);
});
Route::get('/blog', function () {
    $blog_post = [
        [
            "judul"=>"Belajar Laravel_1",
            "slug"=>"belajar-laravel1",
            "author"=>"Muhammad Haidar Shahab",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deleniti quas architecto tenetur aspernatur sunt nihil pariatur, ullam, similique odio asperiores expedita? In at veniam voluptatibus provident porro unde enim."
        ],
        [
            "judul"=>"Belajar Laravel_2",
            "slug"=>"belajar-laravel2",
            "author"=>"Muhammad Haidar Shahab",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deleniti quas architecto tenetur aspernatur sunt nihil pariatur, ullam, similique odio asperiores expedita? In at veniam voluptatibus provident porro unde enim."
        ],
        [
            "judul"=>"Belajar Laravel_3",
            "slug"=>"belajar-laravel3",
            "author"=>"Muhammad Haidar Shahab",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deleniti quas architecto tenetur aspernatur sunt nihil pariatur, ullam, similique odio asperiores expedita? In at veniam voluptatibus provident porro unde enim."
        ],
    ];
    return view('posts',[
        "title"=>"Posts",
        "posts" => $blog_post
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $blog_post = [
        [
            "judul"=>"Belajar Laravel_1",
            "slug"=>"belajar-laravel1",
            "author"=>"Muhammad Haidar Shahab",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deleniti quas architecto tenetur aspernatur sunt nihil pariatur, ullam, similique odio asperiores expedita? In at veniam voluptatibus provident porro unde enim."
        ],
        [
            "judul"=>"Belajar Laravel_2",
            "slug"=>"belajar-laravel2",
            "author"=>"Muhammad Haidar Shahab",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deleniti quas architecto tenetur aspernatur sunt nihil pariatur, ullam, similique odio asperiores expedita? In at veniam voluptatibus provident porro unde enim."
        ],
        [
            "judul"=>"Belajar Laravel_3",
            "slug"=>"belajar-laravel3",
            "author"=>"Muhammad Haidar Shahab",
            "body"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam deleniti quas architecto tenetur aspernatur sunt nihil pariatur, ullam, similique odio asperiores expedita? In at veniam voluptatibus provident porro unde enim."
        ],
    ];

    $newdata = [];
    foreach ($blog_post as $data) {
        if($data["slug"] === $slug){
            $newdata = $data;
        }
    }

    return view('postid',[
        "title"=>"PostId",
        "postid" => $newdata
    ]);
});