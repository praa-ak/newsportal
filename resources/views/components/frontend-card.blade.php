@props(["value"])

<a href="{{route('readpost', $id = $value->id)}}">
    <div
        class="mx-4 my-1 border border-gray-600 rounded-md overflow-hidden h-[250px] hover:shadow-xl">

        <img src="{{ asset($value->image) }}" class="h-1/2 w-full object-cover"
            alt="">

        <div class="p-2 space-y-4">
            <p class="font-semibold">{{ Str::limit($value->title, 50, '...') }}
            </p>
            <p>{{ $value->created_at }}</p>
        </div>
    </div>
</a>
