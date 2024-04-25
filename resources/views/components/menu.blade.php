<div class="bg-blue-800 h-1 ">
</div>
<nav class="bg-gray-50 sticky top-0 z-50  dark:bg-gray-700 border-b-2 border-blue-800">
    <div class="flex items-center">
        <div class="content-center w-auto pl-16 h-full hover:text-blue-800">
            <a href="{{route('login')}}">
                <i class="fa fa-user text-xl"></i>
                <span>Log In</span>
            </a>
        </div>
        <div class="max-w-screen-xl py-3 mx-28 flex items-center">
            <ul class="flex items-center  font-medium text-xl ">
                <li>
                    <a href="/"
                        class=" h-max w-max py-1 px-2 rounded-sm text-gray-900  hover:bg-blue-800 hover:text-gray-100">Home
                        Page</a>
                </li>
                @foreach ($category as $item)
                    <li class=" border-blue-800 hover:border-0 ">
                        <a href="{{ route('category', $item->slug) }}"
                            class="text-gray-900 h-max w-max py-1 px-2 rounded-lg dark:text-white hover:bg-blue-800 hover:text-gray-100 ">{{ $item->eng_name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</nav>
