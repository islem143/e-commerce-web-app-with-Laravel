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
<body  class="min-w-screen w-screen ">
  <div id="overlay" class="z-30 bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
    <div class="bg-gray-200 w-96 p-5 ">
         <div class="flex justify-between mb-5" >
             <h4 class="text-lg ">Add Product</h4>
             <svg id="closeIcon"xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
         </div>
         <div class="mt-2">
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
        <button class="w-full btn text-white bg-blue-400 ">Add Proudct</button>

       </div>
    
   </form>
         </div>
         <div class="flex justify-end space-x-3">
             <button id="closebtn"class="btn">cacel</button>
            
         </div>
        </div>       
</div>  

<div class="relative min-h-screen md:flex ">
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
  <a href="" class="block py-2.5 transition duration-200 rounded hover:bg-red-400 px-4">Customers</a>
  <a href="" class="block py-2.5 transition duration-200 rounded hover:bg-red-400 px-4">Orders</a>
</nav>
</div>

<div class="flex-1 p-10 text-2xl font-bold ">

@yield('content')


</div>

</div> 

<script>
const mobileBtn=document.querySelector('#mobile_btn');
const sideBar=document.querySelector('.sidebar');

mobileBtn.addEventListener('click',()=>{
sideBar.classList.toggle('-translate-x-full');

})

</script>
</body>

</html>