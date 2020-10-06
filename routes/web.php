<?php

use App\Http\Controllers\AppController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/{any}', [AppController::class, 'index'])->where('any', '.*');

Route::get('/logout-manual', function () {
    request()->session()->invalidate();
});
