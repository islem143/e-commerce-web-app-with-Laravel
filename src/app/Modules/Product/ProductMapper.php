<?php

namespace App\Modules\Product;

class ProductMapper
{

    public static function  mapFrom(array $data)
    {

        return new Product(
            $data["id"] ?? null,
            $data["name"],
            $data["slug"],
            $data["description"],
            $data["price"],
            $data["quantity"]



        );
    }
}
