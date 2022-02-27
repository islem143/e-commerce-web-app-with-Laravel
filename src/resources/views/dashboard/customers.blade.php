@extends('dashboard.app')

@section('content')

<x-model name="Customer"/>   

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
    
@endsection




  
<script>
// const mobileBtn=document.querySelector('#mobile_btn');
// const sideBar=document.querySelector('.sidebar');
// const addProductBtn=document.querySelector('#addProductBtn');
// const closeBtn=document.querySelector('#closebtn');
// const overlay=document.querySelector('#overlay');
// const closeIcon=document.querySelector('#closeIcon');


// mobileBtn.addEventListener('click',()=>{
// sideBar.classList.toggle('-translate-x-full');

// })
// addProductBtn.addEventListener('click',()=>{
//     overlay.classList.remove('hidden')
//     overlay.classList.add('flex')
// })

// closeBtn.addEventListener('click',()=>{
//     overlay.classList.remove('flex')
//     overlay.classList.add('hidden')
// })
// closeIcon.addEventListener('click',()=>{
//     overlay.classList.remove('flex')
//     overlay.classList.add('hidden')
// })

</script>
