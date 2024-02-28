<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function company(){
        $company = Company::first();
        return view('Backend.Companny.index', compact('company'));
    }
    public function create() {
        return view('Backend.Companny.create');

    }
    public function savecompany(Request $request){
        $company = new Company();
        $company->name = $request['name'];
        $company->address = $request['address'];
        $company->contact = $request['contact'];
        $company->email = $request['email'];
       if ($request->hasFile('logo')) {
        $file = $request->logo;
        $newname = time().$file->getClientOriginalName();
        $file->move('/images',$newname);
        $company->logo = $newname;
        # code...
       }
        $company->save();
        return redirect()->route('companytable');
    }
    public function update(Request $request, $id){
        $company = Company::find($id);
        $company->name = $request['name'];
        $company->address = $request['address'];
        $company->contact = $request['contact'];
        $company->email = $request['email'];
        if ($request->hasFile('logo')) {
            $file = $request->logo;
            $newname = time().'-'.$file->getClientOriginalName();
            $file->move('images',$newname);
            $company->logo = $newname;

        }
        $company->update();
        return redirect()->back();
    }
    public function edit($id){
        $company = Company::find($id);
        return view('Backend.Companny.edit',compact('company'));


    }
}
