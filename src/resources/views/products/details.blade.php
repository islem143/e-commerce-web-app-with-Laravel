@extends('layouts.app')


@section('content')

<div class="max-w-screen-2xl p-12 m-auto mt-10 rounded-md bg-white " >
    
    <div class="grid grid-cols-2 justify-items-center  ">
        <div class="w-full">
            <img  src="{{asset('img/ecomm.svg')}}" class="mx-auto " alt="">

        </div>
        <div class="flex  flex-col p-5 text-lg ">
            <div class="p-5 mt-5">
                <h2 class="text-3xl mt-6 mb-3">Product Name</h2>
                <p class="">
                    Description Description Description Description
                    Description Description Description Description
                    Description Description Description Description
                    Description Description Description Description
                    Description Description Description Description
                    Description Description Description Description
                </p>
                <p class="mt-5 font-bold text-xl">Price: 44$</p>
        
            </div>
            <div class="p-5">
                <button class="btn  bg-blue-200  hover:bg-blue-400  ">-</button>
                <span class="mx-1 p-2 border border-1 border-black">1</span>
                <button class="btn  bg-blue-200  hover:bg-blue-400  ">+</button>
            </div>
            <div class="p-5">
                <button class="btn  bg-blue-200  hover:bg-blue-400  mt-2 ">Add to cart</button>
              

            </div>
          
        </div>
        
    </div>
        
     

</div>
@endsection