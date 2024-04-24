<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function latestnews(){
        $latest = Post::orderBy('id','desc')->limit(6)->get();
        return $latest;
    }
}
