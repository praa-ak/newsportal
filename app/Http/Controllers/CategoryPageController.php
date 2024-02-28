<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class CategoryPageController extends BaseController
{
    public function category(){
        return view('category');
    }
}
