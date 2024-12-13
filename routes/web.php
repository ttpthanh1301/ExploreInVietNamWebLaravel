<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\Admin\AdminBlogController;

// Routes cho phần quản trị
Route::get('admin/blogs', [AdminBlogController::class, 'index'])->name('admin.blog.index');
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/blogs/create', [AdminBlogController::class, 'create'])->name('blog.create');
    Route::post('/blogs', [AdminBlogController::class, 'store'])->name('blog.store');
    Route::get('/blogs/{slug}/edit', [AdminBlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blogs/{slug}', [AdminBlogController::class, 'update'])->name('blog.update');
    Route::delete('/blogs/{slug}', [AdminBlogController::class, 'destroy'])->name('blog.destroy');
});
Route::get('/tour-search', [TourController::class, 'search2'])->name('tour-search');

// Trang chủ
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tours', [TourController::class, 'index'])->name('tours');

// Routes cho Tours
Route::prefix('tours')->name('tours.')->group(function () {
    Route::get('/tour-detail/{id}', [TourController::class, 'show'])->name('tour-detail');
    Route::get('/search', [TourController::class, 'search'])->name('search');
});

// Booking

// Group cho booking
Route::prefix('booking')->group(function () {
    Route::get('/{id}', [BookingController::class, 'index'])->name('booking');
    Route::post('/', [BookingController::class, 'store'])->name('booking.store');
});

Route::get('/blog-detail/{slug}', [BlogController::class, 'show'])->name('blog-detail');

// Routes cho phần dashboard (yêu cầu đăng nhập)
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
