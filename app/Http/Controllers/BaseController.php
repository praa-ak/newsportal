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
   $category = Category::where('status',true)->get();
    View::share([
        'category'=>$category,
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
