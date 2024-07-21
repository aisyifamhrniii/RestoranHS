<?php

use App\Models\Menuslist;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cekController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MenuOverviewController;



Route::get('/', function () {
    return view('welcome');
});

// Route::get('/menu', [MenuOverviewController::class, 'display'])->name('menus');
// Route::get('/detail', [MenuOverviewController::class, 'detail'])->name('detail');

Route::get('/menu', function(){
    return view('menu',['menuslist' => Menuslist::all() ]);
})->middleware(['auth', 'verified'])->name('menu');

Route::get('/menus/{slug}', function($slug){
    
        $list = Menuslist::find($slug);

        return view('detail', ['menuslist' => $list]);

})->middleware(['auth', 'verified'])->name('menu');

Route::get('/about', function(){
    return view('about');
})->middleware(['auth', 'verified'])->name('about');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/cek1',function(){
    return '<h1>Cek 1</h1>';
})->middleware(['auth','verified']);


Route::get('/cek2',[cekController::class, 'index'])->middleware(['auth','verified']);
require __DIR__.'/auth.php';
