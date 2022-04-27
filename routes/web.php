<?php

// buat manggil model/controller bisa pake ctrl+alt+A pake ext namespace solver

use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
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

Route::get('/login', function () {
    return view('login', [
        'title' => 'Login',
    ]);
    // [AuthController::class, 'index']

});

Route::get('/', function () {
    return view('home', [
        'title' => 'Home',
        'active' => 'home'
    ]);
    // return '<h1>Hello Akasuna Hera</h1>';

});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Akasuna Hera',
        'email' => 'akasuna.hera@gmail.com',
        'img' => '1.jpg',
        'active' => 'about'
    ]);
});

//ini manggil controller namanya PostController terus manggil method(class) index. jangan lupa dipanggil dulu controllernya di paling atas.
Route::get('/blog', [PostController::class, 'index']);
Route::get('post/{post:slug}', [PostController::class, 'show']);

Route::get('categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

// route buat halaman category
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'title' => "$category->name Posts",
        'active' => 'categories',
        'posts' => $category->posts->load('category', 'author')
        // 'category' => $category->name
    ]);
});

// route buat halaman author. parameter user kalo gaada : nya otomatis by ID, bisa diisi sesuai nama field
Route::get('/authors/{author:username}', function (User $author) {
    return view('posts', [
        'title' => "Author $author->name",
        'active' => 'authors',
        //ni pake cara lazy eager loading
        'posts' => $author->posts->load('category', 'author')
    ]);
});
