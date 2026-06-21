<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PaymentGatewayInterface;


class PaymentController extends Controller
{
    
    public function __construct(private  PaymentGatewayInterface $payment){}

    // same fucntion use hoga
    public function charge(){
        $this->payment->charge();
        return response()->json(['message'=>'Done']);
    }
        
}
