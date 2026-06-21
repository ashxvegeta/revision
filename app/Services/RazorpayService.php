<?php
namespace App\Services;
use App\Contracts\PaymentGatewayInterface;

class RazorpayService implements PaymentGatewayInterface{

    public function charge():bool{
        \Log::info('Razorpay se payment hua');
        return true;
        
    }

}