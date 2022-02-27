<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Ecommerce</title>
</head>
<body class="font-body  bg-gray-100"  >

   <div class="">
   <!--NavBar begin-->
    <div class=" px-5 pb-5 mx-auto bg-white" >
        <div class=" flex justify-between  p-5 ">
        <div class="text-3xl ">
          <a href="" class="p-5" >Ecommerce</a>    
        </div>   
        <nav>
            <ul class="flex " >
                <li class="px-4 text-lg" ><a href="" class="rounded hover:bg-blue-400 p-2">Home</a></li>
                <li class="px-4 text-lg"><a href="" class="rounded hover:bg-blue-400 p-2">Products</a></li>
                <li class="px-4 text-lg"><a href="" class="rounded hover:bg-blue-400 p-2">About</a></li>

            </ul>
        </nav>
    </div>
    </div>
    <!--NavBar end-->

    @yield('content')




</div>


</body>
</html>