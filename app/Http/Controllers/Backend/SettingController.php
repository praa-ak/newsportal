<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Post;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = Company::first();
        return view('Backend.Companny.index', compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $company = Company::first();
        return view('Backend.Companny.create', compact('company'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $company = new Company();
        $company->name = $request['name'];
        $company->address = $request['address'];
        $company->contact = $request['contact'];
        $company->email = $request['email'];
       if ($request->hasFile('logo')) {
        $file = $request->logo;
        $newname = time().$file->getClientOriginalName();
        $file->move('images',$newname);
        $company->logo = $newname;
        # code...
       }
        $company->save();
        return redirect()->route('company.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $company = Company::find($id);
        return view('Backend.Companny.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       $company = Post::find($id);
       $company->delete();
       return redirect()->route('company.index');
    }
}
