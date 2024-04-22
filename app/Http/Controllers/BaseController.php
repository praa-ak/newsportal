<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Subcriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
   public function __construct()
  {
   $category = Category::where('status',true)->orderBy('id', 'asc')->get();
   $company = Company::first();
    View::share([
        'category'=>$category,
        'company'=>$company,
        
    ]);
   }
   #Subscriber Part
   public function subscriber(Request $request){
    $sub = new Subcriber();
    $sub->email = $request->email;
    $sub->save();
    toast('Thankyou for Subcribing ','success');
    return redirect()->back();
   }
   public function subindex(){
    $sub = Subcriber::all();
    return view('Backend.subscriber.index', compact('sub'));
   }


}
