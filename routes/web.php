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
    return view('index',[
        'tittle' => 'Home'
    ]);
});
route::get('/about', function () {
    return view('about',[
        'tittle' => 'About'
    ]);
});
route::get('/blog', function () {
    return view('blog',[
        'tittle' => 'Blog'
    ]);
});
route::get('/contact', function () {
    return view('contact',[
        'tittle' => 'Contact Us'
    ]);
});
route::get('/post-details', function () {
    return view('post-details',[
        'tittle' => 'Post Detail'
    ]);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
