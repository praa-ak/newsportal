<div class="bg-blue-800 h-1 ">
</div>
<nav class="bg-gray-50 dark:bg-gray-700">
    <div class="max-w-screen-xl py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex items-center  font-medium text-xl ">
                <li>
                    <a href="#" class=" h-max w-max py-1 px-2 rounded-sm dark:text-white bg-blue-800 text-gray-100 " aria-selected="selected">Home Page</a>
                </li>
                    @foreach ($category as $item)
                    <li>
                        <a href="#" class="text-gray-900 h-max w-max py-1 px-2 rounded-sm dark:text-white hover:bg-blue-800 hover:text-gray-100 " aria-current="">{{ $item->eng_name }}</a>
                    </li>

                    @endforeach
                </ul>
        </div>
    </div>
</nav>
