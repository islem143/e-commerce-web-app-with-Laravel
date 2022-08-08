<?php

namespace App\Modules\Product;

use App\Modules\Product\ProductRepository;
use Illuminate\Support\Facades\Auth;

class ProductService
{

    public function __construct(ProductValidator $validator, ProductRepository $repository)
    {
        $this->validator = $validator;
        $this->repository = $repository;
    }
    public function get(int $id)
    {
        $product = $this->repository->getById($id);

        if (!Auth::check()) {
            return $product->makeHidden(["quantity"]);
        }
        return $product;
    }
    public function getAll()
    {
        return $this->repository->getAll();
    }
    public function update(int $id, array $data)
    {

        return $this->repository->update(
            $id,
            $data
        );
    }
    public function updateProductQuantity($product, $type)
    {
        return $this->repository->updateQuantity(
            $product,
            
            $type
        );
    }
    public function store($data)
    {
        $this->validator->validateCreate($data);
        $this->repository->create($data);
    }
    public function delete($id)
    {

        $this->repository->delete($id);
    }
}
