<?php

use App\Livewire\Test;
use App\Livewire\About;
use App\Livewire\Dashboard;
use App\Livewire\Hotels\HotelList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::group(['prefix' => 'hotels'], function() {
    Route::get('/',HotelList::class)->name('hotels');
});
