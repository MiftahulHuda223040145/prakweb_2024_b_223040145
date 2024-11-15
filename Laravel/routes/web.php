<?php

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;



Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Miftahul Huda', 'title' => 'About']);
});

Route::get('/posts', function () {
    // $posts = Post::with(['author', 'category'])->latest()->get();
    return view('posts', ['title' => 'Blog', 'posts' => Post::filter(request(['search', 'category', 'author']))->latest()->paginate(9)->withQueryString()]);
});

Route::get('/posts/{post:slug}', function(Post $post) { //{post:slug}  mencari data post dengan nilai slug yang diterima
    // $post = Post::find($slug);
    return view('post', ['title' => 'Single Post', 'post' => $post]); //$post ini diamil dari database
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function() {
    return view('dashboard.dashboard', ['title' => 'Welcome back, ']);
})->middleware('auth');

Route::get('/authors/{user:username}', function(User $user) {
    // $posts = $user->posts->load('category', 'author');
    return view('posts', ['title' => count($user->posts) . ' Articles by '. $user->name, 'posts' => $user->posts]);
});

Route::get('/categories/{category:slug}', function(Category $category) {
    // $posts = $category->posts->load('category', 'author');
    return view('posts', ['title' => count($category->posts) . ' Articles in '. $category->name, 'posts' => $category->posts]);
});

Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');

Route::get('/dashboard/posts/{post:id}', function(Post $post) {
    return view('dashboard.show', ['title' => '', 'post' => $post]);
}); 