<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostPageController extends BaseController
{
    public function post()
    {
        $post = Post::all();
        return view('post',compact('post'));
    }
}
