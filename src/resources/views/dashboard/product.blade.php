<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js" ></script>

</head>
<body class="min-w-screen w-screen ">
    
<div class="mobile relative  min-h-screen md:flex ">
    <div class="mobile bg-gray-800 text-gray-100 flex justify-between md:hidden">
        <a href="" class="block p-4 text-white font-bold">Better Dev</a>
        <button id="mobile_btn" class="focus:outline-none hover:bg-gray-700  p-4"><svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg></button>
    </div>
<div class="z-20 sidebar md:relative md:translate-x-0 bg-blue-800 px-2 py-7 text-blue-100 w-64 space-y-6 absolute inset-y-0 left-0 transform -translate-x-full transition duration-200 ease-in-out">
    <a class="flex items-center space-x-2 text-white" href="">
    <span class="text-2xl font-extrabold">Ecommerce</span>
    </a>

<nav>
    <a href="" class="block py-2.5 transition duration-200 rounded hover:bg-red-400  px-4">Home</a>
    <a href="" class="block py-2.5 transition duration-200 rounded hover:bg-red-400 px-4">Proudcts</a>
    <a href="" class="block py-2.5 transition duration-200 rounded hover:bg-red-400 px-4">Analitics</a>
</nav>
</div>

<div class="flex-1  h-96 p-10 text-2xl mt-9">
<!--content-->
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
     

  




</div>

</div> 

  
<script>


</script>
</body>

</html>