<?php

use App\Http\Controllers\Partner;
use Illuminate\Support\Facades\Route;

Route::redirect('/partner', '/partner/home');

Route::group([
    'prefix' => 'partner',
    'as' => 'partner::',
], function () {
    Route::group([
        'prefix' => 'auth',
        'as' => 'auth.',
    ], function () {
        Route::get('/login', [Partner\Auth\LoginController::class, 'index'])
            ->name('login')
            ->middleware(['guest']);
        Route::post('/login', [Partner\Auth\LoginController::class, 'store'])
            ->middleware(['guest']);
        Route::post('/logout', [Partner\Auth\LoginController::class, 'destroy'])
            ->name('logout')
            ->middleware(['auth', 'is_partner']);
    });

    Route::middleware(['auth', 'is_partner'])
        ->group(function () {
            Route::view('/home', 'partner::home')->name('home');
            Route::group([
               'prefix' => 'profile',
               'as' => 'profile.',
            ], function () {
                Route::get('/', [Partner\ProfileController::class, 'edit'])->name('edit');
                Route::put('/', [Partner\ProfileController::class, 'update'])->name('update');
            });
            Route::resource('campaigns', Partner\CampaignController::class);
        });

    Route::view('/example', 'partner::examples.components');
});
