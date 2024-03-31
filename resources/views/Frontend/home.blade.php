<x-layout>
    <section class="flex justify-around">
        <div class="bg-red-800 text-gray-50 w-60 text-center">
            <h3>Breaking News</h3>
        </div>
        <div class="container  mx-auto bg-blue-800 text-gray-50">

            <marquee behavior="" direction="" onmouseover="this.stop()" onmouseout="this.start()">
                <div class="flex gap-5">
                    @foreach ($news as $item)
               <a href="">{{$item->title}}</a>
               @endforeach
            </div>
            </marquee>

        </div>
    </section>
    <section class=" text-center my-4">
        @foreach ($news as $index=>$item)

        <div class="container  mx-auto w-4/5 h-full bg-gray-50 border border-gray-400 rounded my-4">
            <a href="">
            <div class="text-xl font-semibold py-4">
                <h1>{{$item->title}}</h1>
            </div>
            <div class="flex justify-center py-3">
                <img src="{{asset($item->image)}}" alt="" class="h-96 w-full object-cover">
            </div>
        </a>
        </div>

        @endforeach
    </section>


    </x-layout>
