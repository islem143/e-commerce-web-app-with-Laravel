<?php

namespace App\Http\Controllers;

use App\Exceptions\CartExceptions\CartItemNotFoundExeption;
use App\Exceptions\ProductExceptions\ProductNotFoundExeption;
use App\Models\Cart;

use App\Models\Product;

use App\Services\CartService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CartController extends Controller

{
    protected $cartService;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(CartService $cartService)
    {
        $this->cartService = $cartService;
    }

    public function index(Request $request)
    {

        $cart = Cart::with("products")->where("user_id", $request->user()->id)->first();
        return $cart;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Gate::authorize("store", $cart);
        $this->validate($request, [

            'productId' => 'required|integer',
            'quantity' => 'required|integer',


        ]);
        $cart = $request->user()->cart;
        $product = Product::find($request->productId);
        if (!$product) {
            throw new ProductNotFoundExeption();
        }
        $this->cartService->addNewCartItem($cart, $product, $request->quantity);

        return Response(["message" => "product added"], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Product $product)
    {
        $cartItem = $request->user()->cart->products()->find($product);
        if (!$cartItem) {
            throw new CartItemNotFoundExeption();
            //return Response(["error" => "cart-item not found"], 404);
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
    public function update(Request $request, Product $product)
    {
        $cart = $request->user()->cart;
        //Gate::authorize("update", $cart);

        $this->validate($request, [


            'quantity' => 'required|integer',


        ]);

        $cartItem = $cart->products()->find($product);
        if (!$cartItem) {
            throw new CartItemNotFoundExeption();
        }
        $this->cartService->updateCartItem($cart, $cartItem, $product, $request->quantity);


        return Response(["message" => "cart-item updated"], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Product $product)
    {
        if (!$product) {
            throw new ProductNotFoundExeption();
        }
        $cart = $request->user()->cart;
        Gate::authorize("destroy", $cart);
        $product = $cart->products()->detach($product);


        return Response(["message" => "cart-item deleted"], 200);
    }
    public function clearCart(Request $request)
    {
        $cart = $request->user()->cart;
        $cart->total = 0;
        $cart->save();
        $cart->products()->detach();
        return Response(["message" => "cart cleared"], 200);
    }
}
