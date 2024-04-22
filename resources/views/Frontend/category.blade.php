<x-layout>
    <div class="bg-blue-800 h-0.5 w-full my-2"></div>
    <section class="py-3">
        <div class="container mx-auto w-4/5 grid grid-cols-12 ">
            <div class="col-span-8 space-y-3">
            @foreach ($category->posts as $item)
                <div class=" border border-gray-300 bg-gray-100 rounded-md h-48 overflow-hidden hover:shadow-xl">
                    <div class="grid grid-cols-3 gap-2 ">
                        <img src="{{ asset($item->image) }}" alt="" class="col-span-1 h-48 w-full object-cover ">
                        <div class="col-span-2">
                            <h5 class="font-black">{{ $item->title }}</h5>
                            <div class="py-4 px-2 limited-text">{!! $item->description !!}</div>
                            <a href="{{route('readpost', $id = $item->id)}}"class="border border-gray-700 bg-red-600 text-white rounded-md px-3 py-1">Read
                                More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
            <div class="col-span-4 w-full mx-5 space-y-3">
                <div> <a href=""> <img src="https://khabardharan.codeitapps.com/featured/1689666598.jpg" alt=""> </a> </div>
                <div> <a href=""> <img src="https://khabardharan.codeitapps.com/featured/1685060765.png" alt=""> </a> </div>
                <div>  <a href=""> <img src="https://khabardharan.codeitapps.com/featured/1685026507.jpg" alt=""> </a> </div>
            </div>
        </div>

    </section>
</x-layout>
