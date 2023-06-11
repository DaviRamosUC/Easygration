<?php

use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\PropertiesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);

Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/rewards', function () {
    return view('rewards-points');
})->middleware(['auth', 'verified'])->name('rewards');

Route::controller(PropertiesController::class)->group(function () {
    Route::get('/imoveis', 'index')->name('imoveis');
    Route::get('/meusimoveis', 'showByUser')->name('meusimoveis');
    Route::get('/cadastrarnovoimovel', 'create')->name('novoimovel');
    Route::get('/imovel/{id}', 'show')->name('mostrarimovel');
    Route::post('/imovel', 'store')->name('cadastrarimovel');
})->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
