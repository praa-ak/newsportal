<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcriber;
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
        [
            'name'=>'Advertise',
            'slug'=>'adcreate'
        ],


    ];
    View::share([
        'menu'=>$menu,
    ]);
   }
   public function subscriber(Request $request){
    $subscriber = new Subcriber();
    $subscriber->email = $request->email;
    $subscriber->save();
    return redirect()->back();
   }
   public function subindex(){
    $sub = Subcriber::orderBy('id', 'desc')->get();
    return view('Backend.subscriber.index', compact('sub'));
   }
}
