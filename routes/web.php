<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    \Log::info('Logged in user',['user'=>Auth::user()]);
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/admin',function(){

     
 if (Gate::denies('admin-only')) {
        abort(403, 'Sirf admin ja sakta hai!');
    }
return response()->json(['message'=>'Welcome Admin!']);
});

require __DIR__.'/auth.php';
