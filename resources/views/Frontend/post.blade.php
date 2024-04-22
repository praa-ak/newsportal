<x-layout>
    <div class="bg-blue-800 h-0.5 w-full my-2"></div>
    <section class="py-3">
        <div class="container mx-auto grid grid-cols-12 w-4/5">
            <!-- Post -->
            <div class="col-span-8">



                <div class="">
                    <div class="border bg-red-600 py-1 my-5 text-white text-center rounded-md w-1/2 ">प्रकाशित: ९ जेठ
                        २०८०, मङ्गलवार / 40 पटक पढिएको</div>
                    <div class="overflow-hidden">
                        <h5 class="text-black font-semibold text-4xl py-1">{{ $post->title }}</h5>
                        <img src="{{ asset($post->image) }}" alt="" class="my-2 w-full h-96 object-cover">
                        <p class="text-lg ">{!! $post->description !!}
                    </div>

                </div>

            </div>
            <!-- ad -->
            <div class="col-span-4">

            </div>
            <!-- Related news -->

        </div>
        <div class=" container mx-auto border border-gray-700 bg-gray-200 rounded-lg w-4/5 ">
            <div class=" text-white text-xl bg-blue-900 mt-4 mb-2 mx-2">
                <h5 class="py-2 px-2">सम्बन्धित खबर</h5>
            </div>
            <div class="grid grid-cols-4">
                @foreach ($related as $news)
                    <x-frontend-card :news="$news"/>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
