@extends('layouts.app')


@section('content')
<div class="max-w-screen-2xl px-5 m-auto">
    <div class="flex items-center justify-center">
       
        <div class="basis-2/4 p-12 mb-32">
             
                <h1 class="w-full h-full text-7xl">Ecommerce App</h1>
                <button class="text-xl mt-5 bg-red-400 hover:bg-red-300 p-3 rounded">Get started</button>
    
        </div>
        <div class="basis-2/4">
            <img class="w-full h-full " src="{{asset('img/ecomm.svg')}}" alt="">

        </div>
     </div> 

</div>
@endsection