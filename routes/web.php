<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/', [DashboardController::class, 'Index']);

route::get('/about', function () {
    return view('about', [
        'tittle' => 'About',
    ]);
});
route::get('/blog', [BlogController::class, 'index']);
route::get('/contact', function () {
    return view('contact', [
        'tittle' => 'Contact Us',
    ]);
});
route::get('/post-details', function () {
    return view('post-details', [
        'tittle' => 'Post Detail',
    ]);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
