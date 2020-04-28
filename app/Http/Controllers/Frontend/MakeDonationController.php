<?php

namespace App\Http\Controllers\Frontend;

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

        dd($response);

        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
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
            "amount" => 100 * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Test payment from itsolutionstuff.com."
        ]);


        Session::flash('success', 'Payment successful!');

        return back();
    }
}
