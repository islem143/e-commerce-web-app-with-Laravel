@extends('layouts.app')


@section('content')

<div class="max-w-screen-2xl p-12 m-auto  rounded-md mt-10 rounded-md bg-white" >
    <div class="flex  justify-center">
        <div class="w-4/12">
            <h2 class="text-2xl mb-4">Register</h2>
       <form action="{{route('auth.register')}}" method="post" class="flex flex-col">
        @csrf
        <div class="mb-4">
            <input value="{{old('name')}}"class="bg-gray-100 w-full p-4 border-2  rounded-lg   @error('name') border-rose-600 @enderror" type="text" name="name" id="" placeholder="name">
            @error('name')
                {{$message}}
            @enderror
           </div>
           <div class="mb-4">
            <input value="{{old('email')}}" class="bg-gray-100 w-full p-4 border-2  rounded-lg  @error('email') border-rose-600 @enderror" type="text" name="email" id="" placeholder="Email">
            @error('email')
            {{$message}}
            @enderror
           </div>
           <div class="mb-4">
            <input class="bg-gray-100 w-full p-4  border-2 rounded-lg  @error('password') border-rose-600 @enderror" type="password" name="password" id="" placeholder="Password">
            @error('password')
            {{$message}}
        @enderror
           </div>
           <div class="mb-4">
            <input class="bg-gray-100 w-full p-4  border-2 rounded-lg  @error('password_confirmaion') border-rose-600 @enderror" type="password" name="password_confirmation" id="" placeholder="Confirm Password">
            @error('password_confirmation')
            {{$message}}
        @enderror
           </div>
           <div class="mb-4">
            <button class="w-full btn text-white bg-blue-400 ">Register</button>

           </div>
        
       </form>

    </div> 

</div>
</div>

@endsection