<?php



namespace App\Modules\Cart;

use InvalidArgumentException;

class CartValidator
{
    public function validateCreate($data)
    {
        $validator = validator($data, [
            'productId' => 'required|integer',
            //  'quantity' => 'required|integer',

        ]);
        if ($validator->fails()) {
            throw new InvalidArgumentException(json_encode($validator->errors()->all()));
        }
    }
    public function validateUpdate($data)
    {
        $validator = validator($data, [
            "type" => "required|string",
            

        ]);
        if ($validator->fails()) {
            throw new InvalidArgumentException(json_encode($validator->errors()->all()));
        }
    }
}
