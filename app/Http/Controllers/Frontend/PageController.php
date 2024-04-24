<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        return view('Frontend.category', compact('category'));
    }
    public function readpost($id)
    {
        $post = Post::where('id', $id)->first();
        $related = Post::whereHas('categories', function ($query) use ($post) {
            $query->whereIn('categories.id', $post->categories->pluck('id'));
        })->get();
        
        return view('Frontend.post', compact('post','related'));
    }
}
