<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::group([], function () {
    //    Route::get('/', function () {
    //        return Inertia::render('Welcome', [
    //            'canLogin' => Route::has('login'),
    //            'canRegister' => Route::has('register'),
    //            'laravelVersion' => Application::VERSION,
    //            'phpVersion' => PHP_VERSION,
    //        ]);
    //    });

    Route::get('/', function () {
        return Inertia::render('Home', [
            'name' => 'Fikri Mastor',
            'profilePhotoUrl' => 'https://avatars.githubusercontent.com/u/18373448?s=400&u=a59dc2346cf91fa4dbdee6c335aebeae72a5b943&v=4',
        ]);
    })->name('home');

    Route::get('/about', function () {
        return Inertia::render('About');
    })->name('about');

    Route::get('/blog', [\App\Http\Controllers\PostController::class, 'index'])->name('blog.index');
    Route::get('/{post:post_name}', [\App\Http\Controllers\PostController::class, 'view'])->name('blog.view');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
require __DIR__.'/experience.php';
