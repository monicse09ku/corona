<?php

namespace App\Http\Controllers\Frontend;

use App\Models\GuestDonationTransaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Srmklive\PayPal\Services\ExpressCheckout;
use Stripe\Charge;
use Stripe\Stripe;

class MakeDonationController extends Controller
{
    public function payWithPaypal()
    {
        return view('frontend.payment.paypal');
    }

    public function PaypalPayment(Request $request)
    {
        $data = [];
        $data['items'] = [
            [
                'name' => $request->guest_name,
                'price' => $request->amount,
                'desc' => 'Description for test',
                'qty' => 1
            ]
        ];

        $data['invoice_id'] = 1;
        $data['invoice_description'] = "payment #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('donation.paypal.payment.success');
        $data['cancel_url'] = route('donation.paypal.payment.cancel');
        $data['total'] = $request->amount;

        $provider = new ExpressCheckout;
        $response = $provider->setExpressCheckout($data);
        $response = $provider->setExpressCheckout($data, true);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            return redirect($response['paypal_link']);
        } else {
            return redirect()->back()->with('error', 'Something went wrong.');
        }

    }

    public function PaypalPaymentCancel()
    {
        return view('frontend.payment.paypal')->with('error','Your payment is canceled. Please try again later');
    }

    public function PaypalPaymentSuccess(Request $request)
    {
        $provider = new ExpressCheckout;
        $response = $provider->getExpressCheckoutDetails($request->token);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            $transaction_data=[
                'name'=>$response['L_NAME0'],
                'email'=>$response['EMAIL'],
                'transaction_id'=>$response['TOKEN'],
                'amount'=>$response['AMT'],
                'currency'=>$response['CURRENCYCODE'],
            ];
            Log::info($request->token);
            Log::info($transaction_data);
            $this->guestDonationTransaction($transaction_data,GuestDonationTransaction::TRANSACTION_TYPE_PAYPAL);
            return view('frontend.payment.paypal')->with('success','Your payment was successfully. Your payment token is '.$request->token);
        }else{
            return view('frontend.payment.paypal')->with('error', 'Something went wrong.');
        }
    }


    public function payWithStripe(){
        return view('frontend.payment.stripe');
    }

    public function stripePayment(Request $request){
        Stripe::setApiKey(env('STRIPE_SECRET'));

        $data = Charge::create ([
            "amount" => 10 * 100, //todo::amount will change accourding to form value
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Donation"
        ]);

        if(isset($data) && $data['status']=='succeeded'){
            $transaction_data=[
                'transaction_id'=>$data['balance_transaction'],
                'amount'=>$data['amount']/100,
                'currency'=>$data['currency'],
                ];
            $this->guestDonationTransaction($transaction_data,GuestDonationTransaction::TRANSACTION_TYPE_STRIPE);
            Session::flash('success', 'Payment successful!');
        }else{
            Session::flash('error', 'Something went wrong!');
        }
        return back();
    }

    private function guestDonationTransaction($data,$type){

       return GuestDonationTransaction::create([
            'name'=>isset($data['name'])?$data['name']:'',
            'email'=>isset($data['email'])?$data['email']:'',
            'transaction_id'=>$data['transaction_id'],
            'amount'=>$data['amount'],
            'currency'=>$data['currency'],
            'type'=>$type
        ]);
    }
}
