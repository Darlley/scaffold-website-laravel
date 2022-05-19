<?php

use App\Http\Livewire\App\{
    Home,
    About,
    Article
};
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

Route::name('app.')->group(function(){
    Route::get('/', Home::class)->name('home');

    Route::get('/sobre', About::class)->name('about');

    Route::get('/blog/', function(){
        return view('welcome');
    })->name('blog');

    Route::get('/blog/artigos', function(){
        return view('welcome');
    })->name('articles');

    Route::get('/blog/artigo/{slug}', Article::class)->name('article');

    Route::get('/blog/categorias', function(){
        return view('welcome');
    })->name('categories');

    Route::get('/blog/categoria/{id}', function(){
        return view('welcome');
    })->name('category');

    Route::get('/pesquisa/{search}', function(){
        return view('welcome');
    })->name('search')->where('search', '.*');

    Route::get('/contato', function(){
        return view('welcome');
    })->name('contact');

    Route::get('/not-found', function(){
        return view('welcome');
    })->name('home');
});


Route::middleware(['auth:sanctum', config('jetstream.auth_session'),'verified'])->name('admin.')->group(function(){
    Route::get('/dashboard', function(){
        return view('dashboard');
    })->name('dashboard');

    Route::get('/dashboard/sobre', function(){
        return view('dashboard');
    })->name('about');

    Route::get('/dashboard/blog/', function(){
        return view('dashboard');
    })->name('blog');

    Route::get('/dashboard/blog/artigos', function(){
        return view('dashboard');
    })->name('articles');

    Route::get('/dashboard/blog/artigo/{slug}', function(){
        return view('dashboard');
    })->name('article');

    Route::get('/dashboard/blog/categorias', function(){
        return view('dashboard');
    })->name('categories');

    Route::get('/dashboard/blog/categoria/{id}', function(){
        return view('dashboard');
    })->name('category');

    Route::get('/dashboard/pesquisa/{search}', function(){
        return view('dashboard');
    })->name('search')->where('search', '.*');

    Route::get('/dashboard/contato', function(){
        return view('dashboard');
    })->name('contact');

    Route::get('/dashboard/not-found', function(){
        return view('dashboard');
    })->name('home');
});