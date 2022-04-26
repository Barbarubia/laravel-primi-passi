<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $parametri = [
        'saluto'    => 'Hello',
        'mondo'     => 'World',
    ];
    return view('home', $parametri);
})->name('home');

Route::get('/about', function () {
    $parametri = [
        'message' => 'Stai visualizzando la pagina "About"'
    ];
    return view('about', $parametri);
})->name('about');

Route::get('/contacts', function () {
    $parametri = [
        'message' => 'Stai visualizzando la pagina "Contacts"'
    ];
    return view('contacts', $parametri);
})->name('contacts');

