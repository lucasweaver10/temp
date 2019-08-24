<?php

namespace App\Http\Controllers;

use App\Plan;

use Illuminate\Http\Request;

use Laravel\Cashier\Billable;

class User extends Authenticatable
{
    use Billable;
}


use Stripe\{Stripe, Charge, Customer};

class SubscriptionsController extends Controller
{
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
       
    /* {
        $plan = Plan::findOrFail(request('plan'));

        $mollie = new \Mollie\Api\MollieApiClient();
        $mollie->setApiKey(config('services.mollie.key'));
        
       try {
        $customer = Customer::create([
            "name" => request('name'),
            'email' => request('email'),
            'plan' => $plan->name  
        ]);
       } catch (Exception $e) {
           return response()->json(
               ['status' => $e->getMessage()], 422
           );
       }
       
        request()->user()->activate($customer->id);
       
        return [
            'status' => 'Success!'
    ];
    } */
}
