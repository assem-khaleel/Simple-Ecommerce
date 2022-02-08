<?php

namespace App\Http\Controllers;

use App\Mail\PurchaseSuccessful;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;
use Stripe\Charge;
use Stripe\Stripe;


class CheckoutController extends Controller
{
    public function index()
    {

        if(Cart::content()->count() == 0)
        {
            toastr()->success('Your cart is still empty. do some shopping');
            return redirect()->back();
        }
        return view('checkout');
    }

    public function pay()
    {

        Stripe::setApiKey("sk_test_51JKkXfIintjauY6lKDWxFHo54T8Qcm9OS85L1pPyUzfotYtUampSC8TR9iASLo24e9Y4yPPJlar1cIGPXnXdesHy00sBqcoxqA");

        Charge::create([
            'amount' => Cart::total() * 100,
            'currency' => 'usd',
            'description' => 'udemy course practice selling books',
            'source' => request()->stripeToken
        ]);

        toastr()->success('Purchase successfully. wait for our email.');
        Cart::destroy();
        Mail::to(request()->stripeEmail)->send(new PurchaseSuccessful());
        return redirect('/');
    }
}
