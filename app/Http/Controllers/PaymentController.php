<?php

namespace App\Http\Controllers;

use App\Payment;
use Illuminate\Http\Request;
use Omnipay\Omnipay;

class PaymentController extends Controller
{

    private $gateway;

    public function __construct(){
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true);
    }

    public function pay(Request $request){

        try{
            
            $response = $this->gateway->purchase([
                'amount' => $request->amount,
                'currency' => env('PAYPAL_CURRENCY'),
                'returnUrl' => url('success'),
                'cancelUrl' => url('error'),
            ])->send();

            if($response->isRedirect()){
                return $response->redirect();
            }else{
                return $response->getMessage();
            }
            

        } catch (\Throwable $th){
            return $th->getMessage();
        }
    }

    public function success(Request $request){
        if($request->input('paymentId') && $request->input('PayerID')){
            $transanction = $this->gateway->completePurchase([
                'payer_id' => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId')
            ]);

            $response = $transanction->send();

            if($response->isSuccessful()){
                $arr = $response->getData();

                $payment = new Payment();
                $payment->payment_id = $arr['id'];
                $payment->payer_id = $arr['payer']['payer_info']['payer_id'];
                $payment->payer_email = $arr['payer']['payer_info']['email'];
                $payment->amount = $arr['transactions'][0]['amount']['total'];
                $payment->currency = env('PAYMENT_CURRENCY');
                $payment->payment_status = $arr['state'];
                $payment->save();

                return view('success', compact('arr'));
                // "Payment is Successful. Your transaction Id is : ".$arr['id'] ;

            } else {
                return $response->getMessage();
            }
        }else{
            return "Payment Declined !!";
        }

    }
    
    public function error(){
        return view('error', ['message'=> 'Payment Declined']);
    }
}
