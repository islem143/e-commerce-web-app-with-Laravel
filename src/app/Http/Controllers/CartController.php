<?php

namespace App\Http\Controllers;

use App\Exceptions\CartExceptions\CartItemNotFoundExeption;
use App\Exceptions\ProductExceptions\ProductNotFoundExeption;
use App\Models\Cart;

use App\Models\Product;

use App\Modules\Cart\CartService;

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
        return $this->cartService->getCartWithProducts($request->user()->id);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $this->cartService->addNewCartItem($request->user()->id, $request->toArray());

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
        return $this->cartService->getCartItem($request->user()->id, $product);
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

        $this->cartService->updateCartItem($request->user()->id, $request->toArray(), $product);


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
        $this->cartService->clearCart($request->user()->id);
        return Response(["message" => "cart cleared"], 200);
    }
}
