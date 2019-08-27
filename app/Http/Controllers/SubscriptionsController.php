<?php

namespace App\Http\Controllers;

use App\Plan;

use Illuminate\Http\Request;

use Laravel\Cashier\Billable;


use Stripe\{Stripe, Charge, Customer};

class SubscriptionsController extends Controller
{
    public function index()

    {
        $plans = Plan::all();

        return view('plans.index', ['plans' => $plans ]);
    }



    public function store()
    {
        Stripe::setAPIKey(config('services.stripe.secret'));

        $customer = Customer::create([
            'email' => request('stripeEmail'),
            'source' => request('stripeToken'),
        ]);

        Charge::create([
            'customer' => $customer->id,
            'amount' => '',
            'currency' => 'eur',
        ]);

        $session = \Stripe\Checkout\Session::create([
            'payment_method_types' => ['card'],
            'subscription_data' => [
            'items' => [[
            'plan' => 'plan_123',
          ]],
        ],
            'success_url' => 'https://example.com/success',
            'cancel_url' => 'https://example.com/cancel',
        ]);



    }

}
