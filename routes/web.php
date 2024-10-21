<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

Route::get('/assign-role/{userId}/{roleId}', [UserController::class, 'assignRole']);
Route::get('/assign-multiple-roles/{userId}/{roleIds}', [UserController::class, 'assignMultipleRoles']);


Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
