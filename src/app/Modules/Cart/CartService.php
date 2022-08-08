<?php

namespace App\Modules\Cart;


use App\Exceptions\ProductExceptions\ProductOutOfStockException;
use App\Models\Cart;
use App\Models\Product;
use App\Modules\Cart\CartRepository;
use App\Modules\Cart\CartValidator;
use App\Modules\Product\ProductService;

class CartService
{
    private ProductService $productService;
    public function __construct(CartRepository $repository, CartValidator $validator, ProductService $productService)
    {
        $this->validator = $validator;
        $this->repository = $repository;
        $this->productService = $productService;
    }

    public function getCartWithProducts($userId)
    {
        return $this->repository->getByIdWithProducts($userId);
    }

    public function getCartItem($user_id, $product)
    {
        return  $this->repository->getCartItem($user_id, $product);
    }



    public function addNewCartItem($userId, $data)
    {
        $this->validator->validateCreate($data);

        $cart = $this->repository->getById($userId);
        $product = $this->productService->get($data["productId"]);
        $this->checkProductStock($product);
        $cartItem = $cart->products()->find($product);

        if ($cartItem) {
            $this->productService->updateProductQuantity($product, "decrement");
            $this->repository->updateCartTotal($cart, $cart->total+$product->price);
            $this->repository->updateCartProduct($cart, $product, ($cartItem->pivot->quantity + 1));
            return;
        }

        $this->productService->updateProductQuantity($product, "decrement");
        $this->repository->updateCartTotal($cart, $cart->total+$product->price);
        $this->repository->attachProductToCart($cart, $product);
    }
    public function updateCartItem($userId, $data, $product)
    {
        //Gate::authorize("update", $cart);
        $this->validator->validateUpdate($data);
        $cart = $this->repository->getById($userId);
        //$product = $this->productService->get($productId);
        $cartItem = $cart->products()->find($product);
        $type = $data["type"];
        if ($type == "increment") {

            $this->checkProductStock($product);
            $this->productService->updateProductQuantity($product, "decrement");
            $this->repository->updateCartProduct($cart, $product, ($cartItem->pivot->quantity + 1));
            $this->repository->updateCartTotal($cart, $cart->total + $product->price);
        } else if ($type == "decrement") {

            $this->productService->updateProductQuantity($product, "increment");
            $this->repository->updateCartTotal($cart, $cart->total-$product->price );
            $this->repository->updateCartProduct($cart, $product, ($cartItem->pivot->quantity - 1));
        }
    }

    public function clearCart($userId)
    {
        return  $this->repository->clearCart($userId);
    }







    private function checkProductStock(Product $product)
    {

        if ($product->quantity == 0 or ($product->quantity - 1 <= 0)) {

            throw new ProductOutOfStockException();
        }
        return true;
    }
}
