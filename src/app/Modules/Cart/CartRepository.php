<?php


namespace App\Modules\Cart;

use App\Exceptions\CartExceptions\CartInvalidQuantityException;
use App\Exceptions\CartExceptions\CartItemNotFoundExeption;
use App\Exceptions\ProductExceptions\ProductNotFoundExeption;
use App\Models\Cart;

class CartRepository
{

    public function getById($user_id)
    {
        $cart = Cart::where("user_id", $user_id)->first();
        return $cart;
    }

    public function getCartItem($user_id, $product)

    {
        $cartItem = Cart::where("user_id", $user_id)->first()->products()->find($product);

        if (!$cartItem) {
            throw new CartItemNotFoundExeption();
        }
        return $cartItem;
    }

    public function getByIdWithProducts($user_id)
    {
        $cart = Cart::with("products")->where("user_id", $user_id)->first();
        return $cart;
    }
    public function updateCartTotal($cart, $total)
    {
        $cart->total = $total;
        $cart->save();
    }
    public function attachProductToCart($cart, $product)
    {
        return $cart->products()->attach($product->id, [
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),

            "quantity" => 1
        ]);
    }
    public function updateCartProduct($cart, $product, $quantity)
    {
        if ($quantity <= 0) {
            throw new CartInvalidQuantityException();
        }
        $cart->products()->updateExistingPivot($product, [
            "quantity" => $quantity,

        ]);
    }
    public function cartProduct($cart, $product)
    {
        $cartItem = $cart->products()->find($product);
        if (!$cartItem) {
            throw new CartItemNotFoundExeption();
        }
    }
    public function clearCart($userId)
    {
        $cart = Cart::where("user_id", $userId)->first();
        $cart->total = 0;
        $cart->save();
        $cart->products()->detach();
    }
}
