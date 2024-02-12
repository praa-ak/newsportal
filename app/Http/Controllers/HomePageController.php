<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomePageController extends BaseController
{
    public function home(){
        return view('home');
    }
}
