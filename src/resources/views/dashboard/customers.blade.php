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

<div class="flex-1 p-10 text-2xl font-bold ">
<!--content-->

<div class="grid lg:grid-cols-2 xl:grid-cols-3 gap-7 w-10/12 mx-auto mt-20 ">
<div class="card p-8 bg-blue-500 text-white hover:bg-blue-400">
  <span class="block font-light mb-4 tracking-wider">Total Clients</span>
  <span class="tracking-wider">4800</span>
</div>
<div class="md:col-start-3 self-end justify-self-end   ">
    <button id="addProductBtn"class="btn">Add Client</button>
  </div>

  <div class="md:col-span-3 overflow-auto rounded-lg shadow">
  <table class="w-full ">
    <thead class="bg-gray-50 border-b-2 border-gray-200">
      <tr >
        <th class="p-2 text-sm font-semibold tracking-wide text-left">ID</th>
        <th class="p-2 text-sm font-semibold tracking-wide text-left">Name</th>
        <th class="p-2 text-sm font-semibold tracking-wide text-left">Email</th>
        <th class="p-2 text-sm font-semibold tracking-wide text-left">Address</th>
        <th class="p-2 text-sm font-semibold tracking-wide text-left">Phone</th>
        
      </tr>
    </thead>
    <tbody class="divide-y divide-gray-100">
      <tr>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap "><a href="" class="hover:underline text-blue-500">141</a></td>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">The Sliding Mr.</td>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Malcolm Lockyer</td>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Malcolm Lockyer</td>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">1961</td>
        
      </tr>
      <tr>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap " ><a href="" class="hover:underline text-blue-500">45</a></td>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Witchy Woman</td>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">The Eagles</td>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Malcolm Lockyer</td>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">1972</td>
      
      </tr>
      <tr>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap hover:underline text-blue-500"><a href="" class="hover:underline text-blue-500">62</a></td>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Shining Star</td>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Malcolm Lockyer</td>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">Earth, Wind, and Fire</td>
        <td class="p-3 text-sm text-gray-700 whitespace-nowrap">1975</td>
       
      </tr>
    </tbody>
  </table>
</div>
</div>



</div>

</div> 

  
<script>
const mobileBtn=document.querySelector('#mobile_btn');
const sideBar=document.querySelector('.sidebar');
const addProductBtn=document.querySelector('#addProductBtn');
const closeBtn=document.querySelector('#closebtn');
const overlay=document.querySelector('#overlay');
const closeIcon=document.querySelector('#closeIcon');


mobileBtn.addEventListener('click',()=>{
sideBar.classList.toggle('-translate-x-full');

})
addProductBtn.addEventListener('click',()=>{
    overlay.classList.remove('hidden')
    overlay.classList.add('flex')
})

closeBtn.addEventListener('click',()=>{
    overlay.classList.remove('flex')
    overlay.classList.add('hidden')
})
closeIcon.addEventListener('click',()=>{
    overlay.classList.remove('flex')
    overlay.classList.add('hidden')
})

</script>
</body>

</html>