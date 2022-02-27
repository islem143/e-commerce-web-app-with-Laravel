@extends('layouts.app')


@section('content')

<div class="max-w-screen-2xl p-12 m-auto  mt-10 rounded-md bg-white">
     
    <div class="flex  flex-col md:flex-row md:justify-between ">
        
       <div class=" bg-white border border-1 w-full md:w-80 p-5 h-80 rounded-md shadow-lg">
         <h1 class="text-2xl">Categories</h1>    
         <div class="mt-3">
              <ul>
                  <li class="text-lg p-2 border-b-2 hover:border-r-4 hover:bg-blue-400  " ><a href="">Categorie 1</a></li>
                  <li class="text-lg p-2 border-b-2 hover:border-r-4 hover:bg-blue-400"><a href="">Categorie 2</a></li>
                  <li class="text-lg p-2 border-b-2 hover:border-r-4 hover:bg-blue-400"><a href="">Categorie 3</a></li>
              </ul>
            </div>   
    </div> 
   
     <div class="grid lg:grid-cols-2 2xl:grid-cols-3 mt-5 gap-5 mx-auto" >
    <div class="card w-full md:w-80 h-min border border-2  ">
        
        <img  src="{{asset('img/ecomm.svg')}}" class="object-cover w-full " alt="">
        <div class="mx-4 p-5">
            <span class="block">Description </span>
            <button class="btn  mt-2">view</button>
        </div>
    </div>
    <div class="card w-full md:w-80 h-min bg-red-100    ">
        
        <img  src="{{asset('img/ecomm.svg')}}" class="object-cover w-full " alt="">
        <div class="mx-4 p-5">
            <span class="block">Description </span>
             <button class="btn  hover:bg-blue-400 border border-blue-400 border-1 mt-2">view</button>
        </div>
    </div>
       <div class="card w-full md:w-80 h-min    ">
        
           <img  src="{{asset('img/ecomm.svg')}}" class="object-cover w-full " alt="">
           <div class="mx-4 p-5">
               <span class="block">Description</span>
                <button class="btn  hover:bg-blue-400 border border-blue-400 border-1 mt-2">view</button>
           </div>
       </div>
       <div class="card w-full md:w-80 h-min   ">
        
        <img  src="{{asset('img/ecomm.svg')}}" class="object-cover w-full " alt="">
        <div class="mx-4 p-5">
            <span class="block">Description</span>
             <button class="btn  hover:bg-blue-400 border border-blue-400 border-1 mt-2">view</button>
        </div>
    </div>
       
       <div class="card w-full md:w-80 h-min  ">
        <img  src="{{asset('img/ecomm.svg')}}" class="object-cover w-full" alt="">
        <div class="mx-4 p-5">
            <span class="block">Description</span>
             <button class="btn  hover:bg-blue-400 border border-blue-400 border-1 mt-2">view</button>
        </div>
    </div>
    <div class="card w-full md:w-80 h-min  ">
        <img src="{{asset('img/ecomm.svg')}}" class="object-cover w-full" alt="">
        <div class="mx-4 p-5">
            <span class="block">Description</span>
             <button class="btn  hover:bg-blue-400 border border-blue-400 border-1 mt-2">view</button>
        </div>
    </div>
</div>
        
     </div> 

</div>
@endsection