<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

use App\Http\Controllers\ContactController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/contacts', [ContactController::class, 'index']);

    Route::get('/events/create', [EventController::class, 'create']);

    Route::get('/events', [EventController::class, 'index']);

    Route::get('/events/{id}', [EventController::class, 'show']);

    Route:: get('/products/{id}', function ($id) {
        return view('products', ['id' => $id]);
    });

    Route::post('/events', [EventController::class, 'store']);

});
