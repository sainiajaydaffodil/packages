<?php

use Illuminate\Support\Facades\Route;

use SainiSunny246\DaffoAdmin\Http\Controllers\DaffoUserController;

Route::get('/user', [DaffoUserController::class, 'index'])
                    ->name('user.index');
Route::get('/user/create', [DaffoUserController::class, 'create'])
                    ->name('user.create');
Route::get('/edit', [DaffoUserController::class, 'edit'])
                    ->name('user.edit');