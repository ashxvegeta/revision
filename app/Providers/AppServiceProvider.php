<?php

namespace App\Providers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //yahan se line cut karke sidha paymentService Provider mai rakh diya hai

        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        
        Gate::define('admin-only',function($user){
        return $user->email == 'admin@test.com';
        });
    }
}
