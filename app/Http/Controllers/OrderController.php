<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function reorder(Request $request, $orderId)
    {
        // Retrieve the previous order
        $previousOrder = Order::find($orderId);

        // Assuming you have a logged-in user, retrieve the user ID
        $userId = auth()->user()->id;

        // Create a new order with the previous order details
        $newOrder = new Order();
        $newOrder->user_id = $userId;
        $newOrder->product_id = $previousOrder->product_id;
        $newOrder->quantity = $previousOrder->quantity;
        // Set any other relevant fields

        // Save the new order
        $newOrder->save();

        // Redirect the user to the checkout or order confirmation page
        return redirect()->route('show_cart'); // Replace 'checkout' with the appropriate route name
    }
}