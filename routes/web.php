<?php

use App\Http\Controllers\DiscordAuthController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/auth/discord', [DiscordAuthController::class, 'redirect'])
    ->name('auth.discord.redirect');

Route::get('/auth/discord/callback', [DiscordAuthController::class, 'callback'])
    ->name('auth.discord.callback');
