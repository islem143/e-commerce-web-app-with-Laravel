<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct as CartProductModel;
use App\Models\Product;
use App\Models\User;
use Facade\FlareClient\Http\Response;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CartProduct extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Cart $cart)
    {    Gate::authorize("show", $cart);
        return $cart->products;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Cart $cart)
    {
        Gate::authorize("store", $cart);
        $this->validate($request, [

            'productId' => 'required|integer',
            'quantity' => 'required|integer',


        ]);
        $cart->products()->attach($request->productId);
        return Response(["message" => "product added"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Cart $cart, Product $product)
    {
        $cartItem = $cart->products()->find($product);
        if (!$cartItem) {
            return Response(["error" => "cart-item not found"], 404);
        }
        return $cartItem;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart, Product $product)
    {

        Gate::authorize("update", $cart);

        $this->validate($request, [


            'quantity' => 'required|integer',


        ]);
        $cart->products()->updateExistingPivot($product, [
            "quantity" => $request->quantity
        ]);

        return Response(["message" => "cart-item updated"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Cart $cart, Product $product)
    {
        Gate::authorize("destroy", $cart);
        $product = $cart->products()->detach($product);

        return Response(["message" => "cart-item deleted"], 200);
    }
}
