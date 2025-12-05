<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

use App\Http\Controllers\ContactController;


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    Route::get('/dashboard',[EventController::class,'dashboard'])
        ->middleware('auth');

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

    Route::get('/edit/{id}', [EventController::class, 'edit'])
    ->middleware('auth');

    Route::delete('/events/{id}', [EventController::class, 'destroy']);

    Route::put('/update/{id}', [EventController::class, 'update'])
    ->middleware('auth');
});
