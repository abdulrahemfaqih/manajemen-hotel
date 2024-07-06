<?php

use App\Livewire\Test;
use App\Livewire\About;
use App\Livewire\Dashboard;
use App\Livewire\Hotels\HotelCreate;
use App\Livewire\Hotels\HotelList;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', Dashboard::class)->name('dashboard');

Route::group(['prefix' => 'hotel'], function() {
    Route::get('/',HotelList::class)->name('hotel.index');
    Route::get('/create', HotelCreate::class)->name('hotel.create');

});
