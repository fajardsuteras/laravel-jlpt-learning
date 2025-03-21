<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home;
use App\Livewire\KatakanaConverter;
use App\Livewire\HiraganaConverter;

// just showing laravel page 
Route::view('/welcome', 'welcome');

// show main page here, using livewire ...
Route::get('/', Home::class)->name('home');


Route::get('/tools/katakana', KatakanaConverter::class)->name('tools.converter.katakana');
Route::get('/tools/hiragana', HiraganaConverter::class)->name('tools.converter.hiragana');

/*
// save it for later :D
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
*/
// no need for auth for a while
// require __DIR__.'/auth.php';
