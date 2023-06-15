<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cars', App\Http\Actions\Car\IndexAction::class)->name('cars.index');
Route::get('/cars/create', App\Http\Actions\Car\CreateAction::class)->name('cars.create'); //追加
Route::post('/cars/store', App\Http\Actions\Car\StoreAction::class)->name('cars.store');
Route::get('/cars/{car}', App\Http\Actions\Car\ShowAction::class)->name('cars.show'); //追加
Route::get('/cars/{car}/edit', App\Http\Actions\Car\EditAction::class)->name('cars.edit'); // 追加
Route::patch('/cars/{car}/edit', App\Http\Actions\Car\UpdateAction::class)->name('cars.update'); // 追加
Route::delete('/cars/{car}/delete', App\Http\Actions\Car\DeleteAction::class)->name('cars.delete'); //追加
