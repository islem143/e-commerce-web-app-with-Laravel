<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\UserInfo;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return $request->user()->orders;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {       
            $this->validate($request, [

                "address1" => "required|string",
                "firstname" => "required|string",
                "lastname" => "required|string",
                "state" => "required|string",
                "zipCode" => "required|integer",
                "city" => "required|string",
                "paymentMethodId" => "required"
            ]);



            UserInfo::create([
                "address" => $request->address1,
                "first_name" => $request->firstname,
                "last_name" => $request->lastname,
                "zip_code" => $request->zipCode,
                "state" => $request->state,
                "city" => $request->state,
                "user_id" => Auth::user()->id,
                "phone"=>0

            ]);
        $cart = $request->user()->cart;
        $cartTotal = $cart->total;
        $cartItems = $cart->products;

      

        try {
             $user = Auth::user();
            // $payment = $user->charge($cartTotal, $request->paymentMethodId);
            // $payment = $payment->asStripePaymentIntent();
            // $order = Order::create([
            //     "user_id" => Auth::user()->id,
            //     "userinfo_id" => $user->id,
            //     "total" => $payment->charges->data[0]->amount,
            //     "transaction_id" => $payment->charges->data[0]->id,
            //     "status" => Order::PENDING
            // ]);
            $order = Order::create([
                "user_id" => Auth::user()->id,
                "userinfo_id" => $user->id,
                "total" => $cart->total,
                "transaction_id" => "qsd",
                "status" => Order::PENDING
            ]);
            foreach ($cartItems as $c) {
              
                $order->products()->attach($c->pivot->product_id, ["quantity" => $c->pivot->quantity]);
            }
    
    
            return $order;
        } catch (Exception $e) {
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
