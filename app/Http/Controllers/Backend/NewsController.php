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
        $news = Post::orderBy('id', 'desc')->get();
        return view('Backend.News.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('Backend.News.create', compact('categories'));
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
            $news->image ='images/' . $newname;

            # code...
        }

        $news->save();
        $news->categories()->attach($request->categories);
        return redirect()->route('news.index');
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
        $news = Post::find($id);
        $category = Category::all();
        return view('Backend.News.edit', compact('news','category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $news = Post::find($id);
        $news->title = $request['title'];
        $news->description = $request['description'];
        // if ($request->hasFile('image')) {
        //     $file = $request->image;
        //     $newname = time() . $file->getClientOriginalName();
        //     $file->move('images', $newname);
        //     $news->image = 'images/' . $newname;
        // }
        uploadimage($request, $news, 'logo', 'images');
        $news->update();
        $news->categories()->sync($request->categories);
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
