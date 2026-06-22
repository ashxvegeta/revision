<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaymentController;

Route::get('/', function () {
    return view('welcome');
});

// same route bhi use hoga
Route::get('/pay', [PaymentController::class, 'charge'])
    ->middleware(\App\Http\Middleware\LogRequest::class);


Route::get('/facade-test',function(){
       $user  = Auth::user();
       \Log::info('Auth Facade test',['user'=>Auth::user()]);
      \Log::info('App environment', ['env' => App::environment()]);
       \Log::info('Request methods',['methods'=>Request::method()]);
       return response()->json(['message'=>'Facades kaam kiya']);
});