<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\NewsResource;
use App\Models\Category;
use App\Models\Company;
use App\Models\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function latestnews(){

        $latest = Post::orderBy('id','desc')->limit(6)->get();
        // return $latest;
        return  NewsResource::collection($latest);
    }
    public function allcategories(){
        $category = Category::where('status', true)->orderBy('id','asc')->get();
        return $category;
    }
    public function company(){
        $company = Company::first();
        return $company;
    }
    public function related($id){
        $post = Post::where('id', $id)->first();
        $related = Post::whereHas('categories', function ($query) use ($post) {
            $query->whereIn('categories.id', $post->categories->pluck('id'));
        })->get();
        return $related;
    }
}
