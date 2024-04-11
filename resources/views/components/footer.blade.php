<section>
    <div class="bg-red-700 h-1"></div>
</section>
<section class="bg-blue-800">
    <div class="grid grid-cols-3 w-full py-5 px-auto">
    <div class="px-28 text-white">
        <h2 class="font-semibold text-2xl">{{$company->name}}</h2>
        <p></p>
    </div>
    <div class="px-20 text-white">
        <h2 class="font-semibold text-2xl py-2">Contact</h2>
        <p>{{$company->address}}</p>
        <p>{{$company->contact}}</p>
        <p>{{$company->email}}</p>
    </div>
    <div class="px-20 py-8">
        <form action="" class="flex gap-9">
        <input type="email" name="email" class="rounded-md h-9 w-72" placeholder="example@gmail.com">
        <button type="submit" class="bg-red-600 text-white px-3 rounded-lg hover:bg-red-900">subscribe</button>
    </form>
    </div>
</div>
</section>
<section >
    <div class="bg-blue-950 h-10 flex gap-1 justify-center py-2" >
        <p class="text-white font-semibold text-center">Copyright © 2018 / 2024 -</p>
        <a href="" class="text-yellow-200 font-semibold">Khabar Dharan</a>
        <p class="text-white font-semibold text-center">All rights reserved | Powered by:</p>
        <a href="https://www.pradosh.com.np" class="text-yellow-200 font-semibold">Pradosh Adhikari</a>
    </div>
</section>
