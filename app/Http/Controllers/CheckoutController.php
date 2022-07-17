<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {   
		$product_id = $request->id;
		$product_details = Product::find($product_id);
		// Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51LLUNaSJmk896UREy9JDjAjLCNb89W300h9yfJEBubkI0p6UIcZvZGZkmIU3yyf0Z9l6SPM1SMXY6GfQ4iESSrBO00d96dGKul');
		$amount = $product_details->price;
		$amount *= 100;
        $amount = (int) $amount;
		$payment_intent = \Stripe\PaymentIntent::create([
			'description' => 'Stripe Test Payment',
			'amount' => $amount,
			'currency' => 'INR',
			'description' => 'Payment from Test Credit Card',
			'payment_method_types' => ['card'],
		]);
		$intent = $payment_intent->client_secret;
		return view('checkout.credit-card',compact('intent'),[
			'product_details' => $product_details
		]);
    }

    public function afterPayment()
    {
        return redirect('/');
    }
}

