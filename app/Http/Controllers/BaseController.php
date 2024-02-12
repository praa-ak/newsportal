<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
   public function __construct()
  {
    $menu = [
        ['name'=> 'Category',
        'slug'=>'category'],
        [
            'name'=>'Post',
            'slug'=>'post'
        ],

    ];
    View::share([
        'menu'=>$menu,
    ]);
   }
}
