<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\FishController;
use App\Models\Fish;

Route::get('/', function () {
    $fishes = Fish::with('type')->take(6)->get(); 
    return view('welcome', compact('fishes'));
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    
    // CRUDs completos
    Route::resource('types', TypeController::class);
    Route::resource('fish', FishController::class);
});

require __DIR__.'/auth.php';

require __DIR__.'/auth.php';
