<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function category($slug){
        $category = Category::where('slug', $slug)->first();
        return view('Frontend.category', compact('category'));
       }
    public function readp

}
