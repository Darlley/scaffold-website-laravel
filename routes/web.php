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

Route::name('app.')->group(function(){
    Route::get('/', function(){
        return view('livewire.app.home');
    })->name('home');

    Route::get('/sobre', function(){
        return view('livewire.app.about');
    })->name('about');

    Route::get('/blog/', function(){
        return view('livewire.app.blog');
    })->name('blog');

    Route::get('/blog/artigos', function(){
        return "Página de artigos";
    })->name('articles');

    Route::get('/blog/artigo/{slug}', function($slug){
        return "Página do artigo $slug";
    })->name('article');

    Route::get('/blog/categorias', function(){
        return "Página de categorias";
    })->name('categories');

    Route::get('/blog/categoria/{id}', function($id){
        return "Página da categoria $id";
    })->name('category');

    Route::get('/pesquisa/{search}', function($search){
        return "Página de resultados de $search";
    })->name('search')->where('search', '.*');

    Route::get('/contato', function(){
        return view('livewire.app.contact');
    })->name('contact');

    Route::get('/not-found', function(){
        return "Página não encontrada";
    })->name('not');
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