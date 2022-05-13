<?php



namespace App\ProductExceptions\Exceptions;


use Illuminate\Http\Response;

class ProductOutOfStockException extends ApplicationException
{
    public function status(): int
    {
        return Response::HTTP_NOT_FOUND;
    }
    public function help(): string
    {
        return "product out of stock";
    }
    public function error(): string
    {
        return "product out of stock";
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
