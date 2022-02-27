@extends('layouts.app')


@section('content')

<div class="max-w-screen-2xl p-12 m-auto  rounded-md mt-10 rounded-md bg-white" >
    <div class="flex  justify-center">
        <div class="w-4/12">
            <h2 class="text-2xl mb-4">Login</h2>
       <form action="" class="flex flex-col">
          
           <div class="mb-4">
            <input class="bg-gray-100 w-full p-4 border border-1 rounded-lg" type="text" name="" id="" placeholder="Email">
           </div>
           <div class="mb-4">
            <input class="bg-gray-100 w-full p-4 border border-1 rounded-lg" type="password" name="" id="" placeholder="Password">
           </div>
           <div class="mb-4">
            <button class="w-full btn text-white bg-blue-400 ">Login</button>

           </div>
        
       </form>

    </div> 

</div>
</div>

@endsection