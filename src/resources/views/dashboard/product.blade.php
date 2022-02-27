@extends('dashboard.app')
<!--content-->
@section('content')
    

<div class="w-8/12 grid grid-cols-2 gap-5 mx-auto border-4 p-5">
    <div class="">
        <img  src="{{asset('img/ecomm.svg')}}" class="   " alt="">

    </div>

  <div class=" flex flex-col justify-between p-3 ">
  
      <div>
        <h2 class="mb-5">Product</h2>
        <form action="" class="flex flex-col">
          
            <div class="mb-4">
             <input class="bg-gray-100 w-full p-3 border border-1 rounded-lg" type="text" name=""  placeholder="Name">
            </div>
            <div class="mb-4">
             <input class="bg-gray-100 w-full p-3 border border-1 rounded-lg" type="password" name=""  placeholder="Description">
            </div>
            <div class="mb-4">
             <input class="bg-gray-100 w-full p-3 border border-1 rounded-lg" type="number" name=""  placeholder="Price">
            </div>
            <div class="mb-4">
                <label for="Image">Image</label>
             <input id="Image"class="bg-gray-100 w-full p-3 border border-1 rounded-lg" type="file" name=""  placeholder="Image">
            </div>
            <div class="mb-4">
 
            </div>
         
        </form>
      </div>
      <div>
          <button class="btn bg-blue-400">Edit</button>
          <button class="btn bg-red-400">Delete</button>
      </div>
  </div>


</div>
     

  

@endsection


