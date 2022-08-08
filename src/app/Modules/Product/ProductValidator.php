<?php


namespace App\Modules\Product;

use InvalidArgumentException;

class ProductValidator
{

    public function validateCreate($data)
    {
        $validator = validator($data, [
            "name" => 'required|max:255',
            'description' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048'

        ]);
        if ($validator->fails()()) {
            throw new InvalidArgumentException(json_encode($validator->errors()->all()));
        }
    }
}
