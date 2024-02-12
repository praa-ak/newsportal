<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostPageController extends BaseController
{
    public function post(){
        return view('post');
    }
}
