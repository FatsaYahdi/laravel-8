<?php

use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about',['title' => 'About', 'name' => 'hehe','email' => 'awokawok@gmail.com','image' => 'asd.png']);
});

// Route::get('/posts', function () {
// $blog_posts = [
//     [
//         'title' => "Judul Post Pertama",
//         'slug' => "judul-post-pertama",
//         'author' => 'cow2',
//         'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum suscipit, impedit reiciendis quibusdam id minima sequi magnam est fugit eveniet sunt! Odio provident dolores dignissimos, aut quos praesentium voluptate iste vel aliquam quisquam illum totam odit doloribus ipsam autem quod soluta veniam fuga laborum error possimus dicta. Laboriosam, quia ut!'
//     ],
//     [
//         'title' => "Judul Post Kedua",
//         'slug' => "judul-post-kedua",
//         'author' => 'cow2',
//         'body' => 'Lorem ipsum dor sit met const adipiss cing elit. Ipsum suscipit, impedit reiciendis quibusdam id minima sequi magnam est fugit eveniet sunt! Odio provident dolores dignissimos, aut quos praesentium voluptate iste vel aliquam quisquam illum totam odit doloribus ipsam autem quod soluta veniam fuga laborum error possimus dicta. Laboriosam, quia ut!'
//     ]
// ];
//     return view('posts',['title' => 'Posts','posts' => $blog_posts]);
// });

Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/{post:slug}',[PostController::class, 'show']);

Route::get('/categories',function () {
    return view('categories',[
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

// Route::get('/categories/{category:slug}', function (Category $category) {
//     return view('posts',[
//         'title' => "Post by Category : $category->name",
//         'posts' => $category->posts->load('category','author'),
//     ]);
// });

// Route::get('/author/{author:username}',function (User $author) {
//     return view('posts',[
//         'title' => "Post By Author : $author->name",
//         'posts' => $author->posts->load('category','author')
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('/dashboard/posts/checkSlug',[ DashboardPostController::class,'checkSlug'])->middleware('auth');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::resource('/dashboard/categories', AdminCategoryController::class)->except('show')->middleware('admin');