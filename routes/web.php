<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Index;

Route::get('/', Index::class)->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
