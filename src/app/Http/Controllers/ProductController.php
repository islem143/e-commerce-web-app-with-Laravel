<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => 'required|max:255',
            'description' => 'required',
            'price' => 'required|integer',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpg,png,jpeg|max:2048'

        ]);



        $path = $request->file('image')->store('images');

        $path = "storage/" . $path;




        return Product::create([
            "name" => $request->name,
            "description" => $request->description,
            "price" => $request->price,
            "img_url" => $path,
            'quantity' => $request->quantity,
            "slug" => $request->name


        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)

    {
        $product = Product::find($id);
        if (!$product) {
            return Response(["error" => "product not found"], 404);
        }
        return Product::find($id);
    }

    public function count(){
        return Product::all()->count();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     
        return Product::findOrFail($id)->delete();
    }
    public function search($name)
    {

        return Product::where('name', 'like', '%' . $name . '%')->get();
    }
}
