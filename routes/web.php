<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

// same route bhi use hoga
Route::get('/pay',[PaymentController::class,'charge']);