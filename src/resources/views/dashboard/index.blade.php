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
<body>
     
<div class="mobile relative min-h-screen md:flex ">
    <div class="bg-gray-800 text-gray-100 flex justify-between md:hidden">
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
  <span class="block font-light mb-4 tracking-wider">Total Products</span>
  <span class="tracking-wider">4800</span>
</div>
<div class="card p-8 bg-blue-500 text-white hover:bg-blue-400">
    <span class="block font-light mb-4 tracking-wider">Total Customers</span>
    <span class="tracking-wider">4800</span>
  </div>   
  <div class="card p-8 bg-blue-500 text-white  hover:bg-blue-400">
    <span class="block font-light mb-4 tracking-wider">Total Revenue</span>
    <span class="tracking-wider">45549$</span>
  </div> 
</div>

<div class="p-20">
    <canvas id="myChart"></canvas>
</div>

</div>

</div> 

  <script src="https://cdn.jsdelivr.net/npm/chart.js" ></script>
<script>
const mobileBtn=document.querySelector('#mobile_btn');
const sideBar=document.querySelector('.sidebar');

mobileBtn.addEventListener('click',()=>{
sideBar.classList.toggle('-translate-x-full');
console.log('qd');
})
const labels = [
    'January',
    'February',
    'March',
    'April',
    'May',
    'June',
    'July'
  ];

  const data = {
    labels: labels,
    datasets: [{
      label: 'Products',
      backgroundColor: 'rgb(255, 99, 132)',
      borderColor: 'rgb(255, 99, 132)',
      data: [0, 10, 5, 2, 20, 30, 45],
    },
    {
      label: 'Products',
      backgroundColor: 'rgb(255, 150, 30)',
      borderColor: 'rgb(44, 99, 132)',
      data: [40, 60, 55,7, 65, 45, 35],
    }
    
    
    ]
  };

  const config = {
    type: 'line',
    data: data,
    options: {}
  };
  const myChart = new Chart(
    document.getElementById('myChart'),
    config
  );
</script>
</body>

</html>