<?php

namespace App\Services;


use App\Exceptions\ProductExceptions\ProductOutOfStockException;
use App\Exceptions\ProductExceptions\ProductNotFoundExecption;
use App\Models\Cart;
use App\Models\Product;

class CartService
{


    public function addNewCartItem(Cart $cart, Product $product, $quantity)
    {
        $this->checkProductStock($product, $quantity);
        $this->addCartItem($cart, $product, $quantity);
    }


    protected function addCartItem(Cart $cart, Product $product, $quantity)
    {
        $product->quantity = $product->quantity - $quantity;
        $product->save();
        $cart->total = $cart->total + $product->price * $quantity;
        $cart->save();
        $cart->products()->attach($product->id, [
            "created_at" =>  \Carbon\Carbon::now(),
            "updated_at" => \Carbon\Carbon::now(),
            "quantity" => $quantity
        ]);
    }
    protected function checkProductStock(Product $product, $quantity)
    {

        if (!$product) {
            throw new ProductNotFoundExecption();
            //return Response(["message" => "product don't exist"], 404);
        } else if ($product->quantity == 0 or ($product->quantity - $quantity < 0)) {
            //dd($product->quantity - $quantity);
            throw new ProductOutOfStockException();
            //return Response(["message" => "product out of stock"], 404);
        }
        return true;
    }
    protected function updateProductStock($product, $quantity, $type)
    {
        switch ($type) {
            case "decrement":

                $product->quantity = $product->quantity - $quantity;
                $product->save();



                break;
            case "increment":
                $product->quantity = $product->quantity + $quantity;
                $product->save();
        }
    }
    protected function updateCartTotal($cart, $quantity, $type)
    {

        switch ($type) {
            case "increment":
                $cart->total = $cart->total + $quantity;
                $cart->save();
                break;
            case "decrement":
                $cart->total = $cart->total - $quantity;
                $cart->save();
        }
    }
    public function updateCartItem(Cart $cart, $cartItem, Product $product, $quantity)
    {

        if ($quantity > $cartItem->pivot->quantity) {

            $this->checkProductStock($product, $quantity - $cartItem->pivot->quantity);

            $this->updateProductStock($product, $quantity - $cartItem->pivot->quantity, "decrement");
            $this->updateCartTotal($cart, $product->price, "increment");
        } else if ($quantity < $cartItem->pivot->quantity) {

            $this->updateProductStock($product, $cartItem->pivot->quantity - $quantity, "increment");
            $this->updateCartTotal($cart, $product->price, "decrement");
        }

        $cart->products()->updateExistingPivot($product, [
            "quantity" => $quantity
        ]);
    }
}
