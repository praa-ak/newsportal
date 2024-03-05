<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdPageController extends BaseController
{
    public function advertise(){
        return view('advertise');
    }
    public function adstore(Request $request)
    {
        $ad = new Advertisement();
        $ad->company_name = $request->company_name;
        $ad->address = $request->address;
        $ad->contact = $request->contact;
        $ad->email = $request->email;
        if ($request->hasFile('payment')) {
            $file = $request->payment;
            $newname = time().$file->getClientOriginalName();
            $file->move('images', $newname);
            $ad->payment = $newname;
        }
         if ($request->hasFile('banner')) {
            $file = $request->banner;
            $newname = time().$file->getClientOriginalName();
            $file->move('images', $newname);
            $ad->banner = $newname;
        }
        $ad->save();
        return redirect()->back();


    }


}
