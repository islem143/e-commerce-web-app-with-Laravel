<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class OrderItems extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Order $order)
    {
        return $order->products;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $order)
    {
        Gate::authorize("store", $order);
        $this->validate($request, [

            'productId' => 'required|integer',
            'quantity' => 'required|integer',


        ]);
        $order->products()->attach($request->productId);
        return Response(["message" => "product added"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Order $order, Product $product)
    {
        $orderItem = $order->products()->find($product);
        if (!$orderItem) {
            return Response(["error" => "order-item not found"], 404);
        }
        return $orderItem;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order, Product $product)
    {
        Gate::authorize("update", $order);

        $this->validate($request, [


            'quantity' => 'required|integer',


        ]);
        $order->products()->updateExistingPivot($product, [
            "quantity" => $request->quantity
        ]);

        return Response(["message" => "order-item updated"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order, Product $product)
    {
        Gate::authorize("destroy", $order);
        $product = $order->products()->detach($product);

        return Response(["message" => "order-item deleted"], 200);
    }
}
