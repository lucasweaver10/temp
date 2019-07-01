<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
    public function store()
    {
       
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
    }
}
