<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Ecommerce</title>
</head>
<body class="font-body "  >

   <div class="">
   <!--NavBar begin-->
    <div class=" max-w-screen-2xl px-5 mx-auto mb-12 bg-slate-100" >
        <div class=" flex justify-between  p-5 ">
        <div class="text-3xl ">
          <a href="" class="hover:bg-cyan-400 p-5" >Ecommerce</a>    
        </div>   
        <nav>
            <ul class="flex " >
                <li class="px-4 text-lg" ><a href="" class="rounded hover:bg-cyan-400 p-2">Home</a></li>
                <li class="px-4 text-lg"><a href="" class="rounded hover:bg-cyan-400 p-2">Products</a></li>
                <li class="px-4 text-lg"><a href="" class="rounded hover:bg-cyan-400 p-2">About</a></li>

            </ul>
        </nav>
    </div>
    </div>
    <!--NavBar end-->

    @yield('content')




</div>


</body>
</html>