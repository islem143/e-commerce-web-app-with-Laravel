<?php



namespace App\ProductExceptions\Exceptions;
use App\Exceptions\ApplicationException;

use Illuminate\Http\Response;

class ProductOutOfStockException extends ApplicationException
{
    public function status(): int
    {
        return Response::HTTP_NOT_FOUND;
    }
    public function help(): string
    {
        return "product not found";
    }
    public function error(): string
    {
        return "product not found";
    }
    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function render(Request $request)
    // {
    //     return response(["message" => "product out of  stock"], 404);
    // }
}
