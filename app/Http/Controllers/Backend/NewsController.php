<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $news = Post::all();
        return view('Backend.News.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('Backend.News.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $news = new Post();
        $news->title = $request['title'];
        $news->description = $request['description'];
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newname = time() . $file->getClientOriginalName();
            $file->move('images', $newname);
            $news->image = $newname;

            # code...
        }
        $news->save();
        return redirect()->route(' news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::find($id);
        return view('Backend.News.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = Post::find($id);
        $news->title = $request['title'];
        $news->description = $request['description'];
        if ($request->hasFile('image')) {
            $file = $request->image;
            $newname = time() . $file->getClientOriginalName();
            $file->move('images', $newname);
            $news->image = $newname;

            # code...
        }
        $news->update();
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $news = Post::find($id);
        $news->delete();
        return redirect()->route('news.index');

    }
}
