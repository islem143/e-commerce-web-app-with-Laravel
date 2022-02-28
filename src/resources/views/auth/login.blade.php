@extends('layouts.app')


@section('content')

<div class="max-w-screen-2xl p-12 m-auto  rounded-md mt-10 rounded-md bg-white" >
    <div class="flex  justify-center">
        <div class="w-4/12">
            <h2 class="text-2xl mb-4">Login</h2>

       <form action="{{route('auth.login')}}" method="POST" class="flex flex-col">
        @if (session('status'))
            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                {{session('status')}}
            </div>
        @endif
          @csrf
           <div class="mb-4">
            <input value="{{old("email")}}" class="bg-gray-100 w-full p-4  border-2 rounded-lg @error('email') border-rose-600 @enderror" type="email" name="email" id="" placeholder="Email">
            @error('email')
                {{$message}}
            @enderror
           </div>
           <div class="mb-4">
            <input name="password" class="bg-gray-100 w-full p-4  border-2 rounded-lg @error('password') border-rose-600 @enderror" type="password" id="" placeholder="Password">
            @error('password')
                {{$message}}
            @enderror
           </div>
           <div class="mb-4">
            <button class="w-full btn text-white bg-blue-400 ">Login</button>

           </div>
        
       </form>

    </div> 

</div>
</div>

@endsection