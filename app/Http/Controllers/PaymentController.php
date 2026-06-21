<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\PaymentService;

class PaymentController extends Controller
{
    
    public function __construct(private  PaymentService $payment){}

    public function charge(){
        $this->payment->charge();
        return response()->json(['message'=>'Done']);
    }
        
}
