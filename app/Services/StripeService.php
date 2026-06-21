<?php
namespace App\Services;
use App\Contracts\PaymentGatewayInterface;

class StripeService implements PaymentGatewayInterface{

    public function charge():bool{
        \Log::info('Stripe se payment hua');
        return true;
        
    }

}