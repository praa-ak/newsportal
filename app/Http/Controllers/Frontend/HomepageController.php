<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\BaseController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends BaseController
{
    public function home(){
        return view('home');
    }
}
