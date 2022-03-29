<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    ShowTweets,
    CreateApplication
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('tweets', [App\Http\Livewire\ShowTweets::class, '__invoke'])->name('tweets');
Route::get('criar-requerimento', [App\Http\Livewire\Requisition::class, '__invoke']);
Route::get('ver-requerimento', [App\Http\Livewire\Requisition::class, 'show']);
Route::get('requerimento/{id}', [App\Http\Livewire\Requisition::class, 'edit']);

Route::get('/', function () {
    return view('welcome');
});


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
