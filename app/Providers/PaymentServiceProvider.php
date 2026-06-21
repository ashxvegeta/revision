<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        $this->app->bind(
            \App\Contracts\PaymentGatewayInterface::class,
            \App\Services\RazorpayService::class
        );

        ### **Yahi Service Providers ka fayda hai:**

        // - `AppServiceProvider     →  General app bindings`
        // - `PaymentServiceProvider →  Sirf payment related bindings`
        // - `AuthServiceProvider    →  Sirf auth related`
        // - `RouteServiceProvider   →  Sirf routing related`
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
