<?php

namespace App\Http\Controllers;

use Midtrans\Config;
use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PaymentController extends Controller
{
    public function store(Request $request){
        
        $auth = base64_encode(env('MIDTRANS_SERVER_KEY'));
        Config::$isProduction = false;
        Config::$isSanitized = true;
        Config::$is3ds = true;
        $params = array(
            'transaction_details' => array(
                'order_id' => Str::uuid(),
                'gross_amount' => $request->amount_donate,
            ),
            'customer_details' => array(
                'first_name' => $request->name_donature,
                'email' => $request->email_donature,
            ),
        );

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => "Basic $auth",
        ])->post('https://app.sandbox.midtrans.com/snap/v1/transactions', $params);
        $response = json_decode($response->body());
        $payment = new Payment;
        $payment->order_id = $params['transaction_details']['order_id'];
        $payment->status = 'Pending';
        $payment->amount_donate = $request->amount_donate;
        $payment->petition_name = $request->petition_name;
        $payment->name_donature = $request->name_donature;
        $payment->email_donature = $request->email_donature;
        $payment->payment_link = $response->redirect_url;

        $payment->save();

        return response()->json($response, 200);

    }

    public function webhook(Request $request){
        $auth = base64_encode(env('MIDTRANS_SERVER_KEY'));
         $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => "Basic $auth",
        ])->get("https://api.sandbox.midtrans.com/v2/$request->order_id/status");
        $response = json_decode($response->body());

        $payment = Payment::where('order_id', $response->order_id)->firstOrFail();

        if($payment->status === 'settlement' || $payment->status === 'capture'){
            return response()->json('Pembayaran sudah terproses');
        }

        if($response->transaction_status === 'capture'){
            $payment->status = 'capture';
        } else if($response->transaction_status === 'settlement'){
            $payment->status = 'settlement';
        } else if($response->transaction_status === 'pending'){
            $payment->status = 'pending';
        } else if($response->transaction_status === 'deny'){
            $payment->status = 'deny';
        } else if($response->transaction_status === 'expire'){
            $payment->status = 'expire';
        } else if($response->transaction_status === 'cancel'){
            $payment->status = 'cancel';
        }
        $payment->save();
        return response()->json('berhasil');

    }
}
