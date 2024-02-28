<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news(){
        $news = Post::all();
        return view('Backend.News.index', compact('news'));


    }
    public function create(){
        return view('Backend.News.create');
    }
    public function savenews(Request $request){
        $news = new Post();
        $news->title = $request['title'];
        $news->description = $request['description'];
        if ($request->hasFile('image'))
        {
            $file = $request->image;
            $newname = time().$file -> getClientOriginalName();
            $file->move('/images',$newname);
            $news->image = $newname;

            # code...
        }
        $news -> save();
        return redirect()->route('newstable');

        
    }
}
