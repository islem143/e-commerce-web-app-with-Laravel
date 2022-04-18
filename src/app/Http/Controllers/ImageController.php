<?php

namespace App\Http\Controllers;

use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response as FacadesResponse;

class ImageController extends Controller
{
    public function image($filename)
    {
        $path = public_path() . '/storage/images/' .$filename;
        return FacadesResponse::download($path);
        //  $img = public_path('img/product/curry.jpg');
        //  return response()->download($img);
    }
}
