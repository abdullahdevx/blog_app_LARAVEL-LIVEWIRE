<?php
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Livewire\AdminPosts;
use App\Livewire\FetchPosts;
use App\Livewire\AddPosts;
use App\Livewire\showSinglePost;
use App\Livewire\Dashboard;

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


Route::get('/', Dashboard::class)->name('dashboard');

route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/posts', FetchPosts::class)->middleware(['auth'])->name('posts');
Route::get('/create', AddPosts::class)->middleware(['auth'])->name('add.post');

Route::get('/post/{id}', [showSinglePost::class, 'render'])->middleware(['auth'])->name('show.post');

//ADMIN ROUTE!
Route::get('/admin/posts', AdminPosts::class)->middleware(['auth', 'isAdmin'])->name('admin');




require __DIR__.'/auth.php';


