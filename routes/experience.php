<?php

use App\Http\Controllers\ExperienceController;
use Illuminate\Support\Facades\Route;

Route::group([
    'as' => 'experience.',
    'prefix' => 'experience',
    'controller' => ExperienceController::class,
    'middleware' => ['auth'],
], function () {
    Route::get('/list', 'index')->name('index');
    Route::get('/{experience}/edit', 'edit')->name('edit');
});
