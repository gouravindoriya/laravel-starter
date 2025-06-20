<x-layout>
  
<div class="flex flex-wrap justify-center gap-4 p-4 tansparentgit ">


     @foreach ($tea as $t)
        
 
<div class="w-sm rounded overflow-hidden bg-white shadow-lg">
  {{-- <img class="w-full" src="/img/card-top.jpg" alt="Sunset in the mountains"> --}}
  <div class="px-6 py-4">
    <div class="font-bold text-3xl mb-2">{{$t['name']}}</div>
    <p class="text-gray-700 text-base">
      {{$t['description']}}
    </p>
  </div>
  <div class="px-6 pt-4 pb-2">
    
    <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">{{$t['price']}}</span>
  </div>
</div>
       

     @endforeach
     </div>

</x-layout>