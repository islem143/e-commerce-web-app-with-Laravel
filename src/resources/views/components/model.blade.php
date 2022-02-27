<div id="overlay" class="z-30 bg-black bg-opacity-50 absolute inset-0 hidden justify-center items-center">
    <div class="bg-gray-200 w-96 p-5 ">
         <div class="flex justify-between mb-5" >
             <h4 class="text-lg ">{{$name}}</h4>
             <svg id="closeIcon"xmlns="http://www.w3.org/2000/svg" class="cursor-pointer h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
              </svg>
         </div>
         <div class="mt-2">
 <form action="" class="flex flex-col">
      
       <div class="mb-4">
        <input class="bg-gray-100 w-full p-3 border border-1 rounded-lg" type="text" name=""  placeholder="{{$name}}">
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
        <button class="w-full btn text-white bg-blue-400 ">Add {{$name}}</button>

       </div>
    
   </form>
         </div>
         <div class="flex justify-end space-x-3">
             <button id="closebtn"class="btn">cancel</button>
            
         </div>
        </div>       
</div> 