<?php

namespace App\Http\Controllers;

use App\Exceptions\ProductExceptions\ProductNotFoundExeption;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use App\Modules\Product\ProductService;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    private $productService;
    public function __construct(ProductService $service)
    {
        $this->productService = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->productService->getAll();
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

        //$path = "storage/" . $path;




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
    public function show(Request $request,$id)

    {
       
        return $this->productService->get($id);
    }

    public function count()
    {
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
        return $this->productService->update($id, $request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        return $this->productService->delete($id);
    }
    public function search($name)
    {

        return Product::where('name', 'like', '%' . $name . '%')->get();
    }
}
