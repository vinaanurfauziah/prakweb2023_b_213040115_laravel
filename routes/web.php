<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

use App\Models\Category;
use App\Models\User;


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
        "title" => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Vina Nur Fauziah",
        "email" => "vinanurfauziahh@gmail.com",
        "image" => "vina.jpeg"
    ]);
});

// Route::get('/blog', function () {
//     return view('blog', [
//         "title" => 'Blog'
//     ]);
// });

Route::get('/blog', [PostController::class, 'index']);
Route::get('/posts/{blog::slug}', [PostController::class, 'show']);

Route::get('categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        // "active" => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('categories/{category:slug}', function(Category $category) {
    return view('posts', [
        'title' => "Post By Category : $category->name",
        // "active" => 'categories',
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

Route::get('/authors/{author:username}', function(User $author) {
    return view('posts', [
        'title' => "Post By Author : $author->name",
        // "active" => 'categories',
        'posts' => $author->posts->load('category', 'author'),
    ]);
});