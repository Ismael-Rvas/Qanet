<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('home');

Route::get('/nosotros', function () {
    return view('nosotros');
})->name('nosotros');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');

Route::get('/clientes', function () {
    return view('clientes');
})->name('clientes');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/aviso-legal', function () {
    return view('components.aviso-legal');
})->name('aviso-legal');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {});
