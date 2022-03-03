<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginApiController extends Controller
{
    public function store(Request $request){

        $this->validate($request, [
            'email' => "required|email",
            
            'password' =>  "required"
        ]);
      
        $user=User::where('email',$request->email)->first();
        if(!$user){
            return Response(["message"=>'user with this email not found'],404);
        } 
        if(!Hash::check($request->password,$user->password)){
            return Response(["message"=>'Invalid password'],401);

        }

        $token=$user->createToken('myapptoken')->plainTextToken;

        $response=[
            'user'=>$user,
            'token'=>$token
        ];
        return response($response,201);

        
    }
}
