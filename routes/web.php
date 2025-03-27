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

Route::get('/sauces', 'App\Http\Controllers\SauceController@index')->name('listerSauces');
Route::get('/sauces/{id}', 'App\Http\Controllers\SauceController@show')->name('afficherSauce');
Route::delete('/supprimerSauce/{id}', 'App\Http\Controllers\SauceController@destroy')->name('supprimerSauce');
Route::get('/ajouterSauce', 'App\Http\Controllers\SauceController@create')->name('ajouterSauce');
Route::post('/storeSauce', 'App\Http\Controllers\SauceController@store')->name('storeSauce');
Route::get('/modifierSauce/{id}', 'App\Http\Controllers\SauceController@edit')->name('modifierSauce');
Route::get('/updateSauce/{id}', 'App\Http\Controllers\SauceController@update')->name('updateSauce');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
