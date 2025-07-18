<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use App\Models\Review;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Http\Request;
use Illuminate\Cache\RateLimiting\Limit;

use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index'])->name('landing');




Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/', function () {
    return redirect()->route('books.index');
});


Route::resource('books', BookController::class)
    ->only(['index', 'show']);


Route::resource('books.reviews', ReviewController::class)
    ->scoped(['review' => 'book'])
    ->only(['create', 'store']);


RateLimiter::for('reviews', function (Request $request) {
    return Limit::perHour(3)->by($request->user()?->id ?: $request->ip());
});
