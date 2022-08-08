<?php


namespace App\Modules\Product;

use App\Exceptions\ProductExceptions\ProductNotFoundExeption;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class ProductRepository
{

    public function getById(int $id)
    {
        $product = Product::find($id);
        if (!$product) {

            throw new ProductNotFoundExeption();
        }
        return $product;
    }

    public function getAll()
    {
        return Product::all();
    }

    public function update(int $id, $data)
    {
        $product = Product::find($id);
        if (!$product) {
            throw new ProductNotFoundExeption();
        }
        $product->update($data);
        return $product;
    }

    public function updateQuantity($product, $type)
    {
        switch ($type) {
            case "decrement":

                $product->quantity = $product->quantity - 1;
                $product->save();



                break;
            case "increment":
                $product->quantity = $product->quantity + 1;
                $product->save();
        }
    }
    public function create($data)
    {
        $path = $data->file('image')->store('public/images/');

        $path = "storage/" . $path;


        return Product::create([
            "name" => $data->name,
            "description" => $data->description,
            "price" => $data->price,
            "img_url" => $path,
            'quantity' => $data->quantity,
            "slug" => $data->name


        ]);
    }

    public function delete($id)
    {
        $product = Product::find($id);

        if (!$product) {
            throw new ProductNotFoundExeption();
        }
        Storage::delete($product->img_url);
        return $product->delete();
    }
}
