<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;





class StripeController extends Controller
{

    public function subscribe($total)
    {
        $username = '';

        if (Auth::check()) {
            $user = Auth::user();
            $count_cart = Cart::where('user_id', $user->id)->sum('quantity');
        } else {
            $count_cart = 0;
        }

        return view('shop.subscribe', compact('total', 'username', 'count_cart'));
    }


    public function stripeSubscribe(Request $request, $total)
    {
        $subscriptionDays = $request->input('subscription_days');

        // Store subscription details in session
        Session::put('subscription_total', $total);
        Session::put('subscription_days', $subscriptionDays);

        // Schedule the command to run after the specified number of days
        Artisan::call('subscription:process', [
            '--subscriptionDays' => $subscriptionDays,
            // Add any other necessary options or arguments
        ]);

        return redirect()->route('stripe.post', ['totalprice' => $total, 'fromStripeController' => true]);
    }

    

}
