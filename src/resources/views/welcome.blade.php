<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="text-gray-600 ">
   <div class="grid md:grid-cols-3">
<!--begin nav -->
     <div class="p-3 md:col-span-1 md:justify-end md:flex">
         <nav class="text-right"  >
             <div class="flex justify-between items-center">
                 <h1><a href="/" class="hover:text-gray-700 text-green-500 text-red-500 font-bold border-b border-gray-100 uppercase text-2xl">
                    Food Ninja</a></h1>
                    <div class="px-4 cursor-pointer md:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                          </svg>
                    </div>
             </div>
             <ul class="text-sm mt-6 hidden md:block">
                 <li class="text-gray-700 py-1"><a  class="px-4 flex justify-end"href="">
                    <span>Home</span>
                    <svg  class="w-5 ml-2 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                      </svg>
                     
                    </a>
                    </li>
                 <li class="py-1"><a href="" class="px-4 flex justify-end">
                     <span>About</span>
                     <svg class="w-5 ml-2 " xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    
                    </a></li>
                 <li class="py-1"><a href="" class="px-4 flex justify-end">
                     <span>Contact</span>
                     <svg class="w-5 ml-2 " xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                      </svg>
                    </a></li>

             </ul>
         </nav>
     </div>
      <!--end nav -->
     <main class="bg-gray-100 px-16 py-6 md:col-span-2">
         <div class="flex justify-center md:justify-end">
             <a href="" class="btn border-gray text-red-500 border-2" >Log in</a>
             <a href="" class="ml-2 text-red-500 btn border-gray border-2">Sign up</a>
         </div>
         <header>
             <h2 class="text-6xl">Recipes</h2>
             <h3 class="text-2xl">For Ninjas</h3>
         </header>
         <div>
             <h4 class="font-bold">Latest Recipes </h4>

             <div class="mt-8 grid lg:grid-cols-3 gap-10">
                 <div class="card hover:shadow-lg">
                     <img src="{{asset('img/curry.jpg')}}" class="object-cover w-full h-32 sm:h-48"alt="">
                     <div class="m-4">
                         <span class="font-bold"> Bean Chilli stew</span>
                         <span class="block text-gray-500 text-sm">Recipe by Mario</span>
                     </div>
                     <div class="badge">
                        <svg class="w-5 inline-block"xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                         <span>
                         25mn
                         </span>
                        </div>
                 </div>
                 <div class="card">
                    <img src="{{asset('img/noodles.jpg')}}" class="object-cover w-full h-32 sm:h-48"alt="">
                    <div class="m-4">
                        <span class="font-bold"> Bean Chilli stew</span>
                        <span class="block text-gray-500 text-sm">Recipe by Mario</span>
                    </div>
                    <div class="badge">
                        <svg class="w-5 inline-block"xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                         <span>
                         25mn
                         </span>
                       </div>
                </div>
                <div class="card">
                    <img src="{{asset('img/stew.jpg')}}" class="object-cover w-full h-32 sm:h-48"alt="">
                    <div class="m-4">
                        <span class="font-bold"> Bean Chilli stew</span>
                        <span class="block text-gray-500 text-sm">Recipe by Mario</span>
                    </div>
                    <div class="badge">
                        <svg class="w-5 inline-block"xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                          </svg>
                         <span>
                         25mn
                         </span>
                       </div>
                </div>

             </div>
             <h4 class="font-bold">Most Popular</h4>
             <div>
                 <!-- -cars go here -->
             </div>
             <div class="flex justify-center">
                 <div class="btn bg-gray-200 ">
                   Load more
               </div>
        </div>

         </div>
     </main>





   </div>
</body>
</html>