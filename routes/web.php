<?php

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/', function () {
    return view('about', [
        "title" => "about",
        "name" => " Mutiara Laelani Firdaus",
        "email" => "mutiara.213040079@mail.unpas.ac.id",
        "image" => "muti.jpg"
    ]);
});

$blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "autor" => " Mutiara Laelani Firdaus",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolore a error dolores consectetur excepturi unde amet laboriosam nostrum ea rem perferendis quisquam quia explicabo, animi vel eligendi necessitatibus at consequatur minima corporis quas nihil voluptatum! A molestiae veritatis iure ut omnis. Ad sequi cupiditate quia amet tempora perferendis quibusdam doloremque, explicabo ipsam facere, ratione perspiciatis consequatur suscipit adipisci officia dolore, quisquam iure molestias ea repellat? Fugiat sint, iure, saepe, quos perferendis exercitationem cum quasi quia magni corporis nihil odit."
    ],
    [
        "title" => "Judul Post Kedua",
        "autor" => " putri",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore dolore a error dolores consectetur excepturi unde amet laboriosam nostrum ea rem perferendis quisquam quia explicabo, animi vel eligendi necessitatibus at consequatur minima corporis quas nihil voluptatum! A molestiae veritatis iure ut omnis. Ad sequi cupiditate quia amet tempora perferendis quibusdam doloremque, explicabo ipsam facere, ratione perspiciatis consequatur suscipit adipisci officia dolore, quisquam iure molestias ea repellat? Fugiat sint, iure, saepe, quos perferendis exercitationem cum quasi quia magni corporis nihil odit."
    ],
];
Route::get('/blog', function () {
    return view('posts', [
        "title" => "posts"
        
    ]);
});