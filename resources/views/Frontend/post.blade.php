<x-layout>
<body>
    <header>
        <h1>Post Page</h1>
        @foreach ($post as $value )


       <section>
        <div class="container">
            <h3>{{$value->title}}</h3>
        </div>
        <img src="{{$value('image')}}" alt="">
        <p>
            {{$value->description}}
        </p>
       </section>
       @endforeach

</body>
</x-layout>
