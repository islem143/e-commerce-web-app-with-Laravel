@extends('layouts.app')


@section('content')

<div class="max-w-screen-2xl p-12 m-auto  rounded-md mt-10 rounded-md bg-white" >
    <div class="flex  justify-center">
        <div>
    <h1 class="text-center text-3xl mb-4">Cart</h1>
    <table class=" mx-auto table-fixed">
        <thead class="bg-white">
          <tr >
            <th class="p-3 border border-1">Product</th>
            <th class="p-3 border border-1">Price</th>
            <th class="p-3 border border-1">Quantity</th>
            <th class="p-3 border border-1">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="p-3 border border-1">The Sliding Mr.</td>
            <td class="p-3 border border-1">Malcolm Lockyer</td>
            <td class="p-3 border border-1">1961</td>
            <td class="p-3 border border-1">1961</td>
          </tr>
          <tr>
            <td class="p-3 border border-1">Witchy Woman</td>
            <td class="p-3 border border-1">The Eagles</td>
            <td class="p-3 border border-1">1973</td>
            <td class="p-3 border border-1">1961</td>
          </tr>
          <tr>
            <td class="p-3 border border-1">Shining Star</td>
            <td class="p-3 border border-1">Earth, Wind, and Fire</td>
            <td class="p-3 border border-1">1975</td>
            <td class="p-3 border border-1">1961</td>
          </tr>
        </tbody>
      </table>
      <div class="text-center mt-7 flex justify-between items-center">
          <button class=" btn text-white bg-blue-400 h-9  ">Chekout</button>
          <span class="font-bold m-5">Total: 4440$</span>

      </div>
    </div>
    </div> 

</div>
@endsection