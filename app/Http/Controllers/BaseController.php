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
   $category = Category::where('status',true)->get();
   $company = Company::first();
    View::share([
        'category'=>$category,
        'company'=>$company,
    ]);
   }

}
