<?php




namespace App\Exceptions\CartExceptions;

use App\Exceptions\ApplicationException;

use Illuminate\Http\Response;

class CartInvalidQuantityException extends ApplicationException
{
    public function status(): int
    {
        return Response::HTTP_BAD_REQUEST;
    }
    public function help(): string
    {
        return "quantity already one";
    }
    public function error(): string
    {
        return "quantity already one";
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
