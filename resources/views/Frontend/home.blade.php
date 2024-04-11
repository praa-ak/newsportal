<x-layout>
    <section class="flex justify-around">
        <div class="bg-red-800 text-gray-50 w-60 text-center">
            <h3 class="py-2">Breaking News</h3>
        </div>
        <div class="container  mx-auto bg-blue-800 text-gray-50 ">

            <marquee behavior="" direction="" onmouseover="this.stop()" onmouseout="this.start()">
                <div class="flex gap-8">
                    @foreach ($news as $item)

                        <a href="" class="py-2">{{ $item->title }}</a>
                    @endforeach
                </div>
            </marquee>

        </div>
    </section>
    <section class=" text-center my-4">
        @foreach ($news as $index => $item)
            @if ($index < 2)
                <div
                    class="container mx-auto w-4/5 h-full bg-gray-50 border border-gray-400 rounded my-4 hover:shadow-lg">
                    <a href="">
                        <div class="text-xl font-semibold py-4">
                            <h1>{{ $item->title }}</h1>
                        </div>
                        <div class="flex justify-center py-3">
                            <img src="{{ asset($item->image) }}" alt="" class="h-96 w-full object-cover">
                        </div>
                    </a>
                </div>
            @endif
        @endforeach
    </section>
    <section>
        <div class="container mx-auto w-4/5 border border-gray-400 h-full">
            <a href="">
                <img src="https://khabardharan.codeitapps.com/featured/1685028419.png" class="w-full" alt="">
            </a>
        </div>
    </section>
    <section class="py-5">
        <div class="container mx-auto w-4/5 bg-gray-50">
            <div class="grid grid-cols-12 gap-5">

                @foreach ($category as $index => $item)
                    @if (count($item->posts)>0)
                    @if ($index == 0)
                        <div class="col-span-8">

                            <div class=" flex justify-between text-gray-50 bg-blue-800 py-2 px-2">
                                <p>{{ $item->eng_name }}</p>
                                <p class="border border-yellow-300 rounded-lg px-2 hover:bg-yellow-300">thap</p>

                            </div>
                            <div class="grid grid-cols-3">
                                @foreach ($item->posts as $value)
                                    <a href="">
                                        <div
                                            class="mx-4 my-1 border border-gray-600 rounded-md overflow-hidden h-[250px] hover:shadow-xl">

                                            <img src="{{ asset($value->image) }}" class="h-1/2 w-full object-cover"
                                                alt="">

                                            <div class="p-2 space-y-4">
                                                <p class="font-semibold">{{ Str::limit($value->title, 50, '...') }}</p>
                                                <p>{{ $value->created_at }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="col-span-4">

                            <div class="rounded-md h-10 flex  text-center items-center bg-blue-800">
                                <div class="h-full bg-blue-400 rounded-md">
                                <a href="">
                                    <p class="px-2 py-2">New Update</p>
                                </a>
                            </div>
                            <div class="py-2 px-2 text-center hover:border border-white rounded-md">
                                <a href="" class=" bg-blue-800 ">
                                    <p class="text-white">Popular</p>
                                </a>
                            </div>
                            </div>
                            
                            <div class="bg-blue-400 h-3/4 my-3">
                                <p>nvjdj</p>

                            </div>
                        </div>

                    @else
                        <div class="col-span-12">
                            <div class=" flex justify-between text-gray-50  bg-blue-800 py-2 px-2">
                                <p>{{ $item->eng_name }}</p>
                                <p class="border border-yellow-300 rounded-lg px-2 hover:bg-yellow-300">thap</p>
                            </div>
                            <div class="grid grid-cols-4">
                                @foreach ($item->posts as $value)
                                    <a href="">
                                        <div class="mx-4 my-1 border border-gray-600 rounded-md overflow-hidden h-[250px] hover:shadow-xl">

                                            <img src="{{ asset($value->image) }}" class="h-1/2 w-full object-cover" alt="">

                                            <div class="p-2 space-y-4">
                                                <p class="font-semibold">{{ Str::limit($value->title, 50, '...') }}</p>
                                                <p>{{ $value->created_at }}</p>
                                            </div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
            @endif

                    @endif

            {{-- <div class="grid grid-cols-3 col-span-8">
                @foreach ($item->posts as $value)
                    <a href="">
                        <div
                            class="mx-4 my-1 border border-gray-600 rounded-md overflow-hidden h-[250px] hover:shadow-xl">

                            <img src="{{ asset($value->image) }}" class="h-1/2 w-full object-cover" alt="">

                            <div class="p-2 space-y-4">
                                <p class="font-semibold">{{ Str::limit($value->title, 50, '...') }}</p>
                                <p>{{ $value->created_at }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div> --}}
            @endforeach

        </div>
        </div>
    </section>


</x-layout>
