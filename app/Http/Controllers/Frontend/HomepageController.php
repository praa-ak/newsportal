<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class HomepageController extends BaseController
{
    public function home(){
        $news = Post::orderBy('id', 'desc')->get();
        return view('Frontend.home', compact('news'));
    }
}
