<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ad = Advertisement::all();
        return view('Backend.Advertisement.index', compact('ad'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Advertisement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
        return redirect()->route('advertise.index');


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
        $ad = Advertisement::find($id);
        return view('Backend.Advertisement.edit', compact('ad'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $ad = Advertisement::find($id);
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
        $ad->status = $request->status;
        $ad->save();
        return redirect()->route('advertise.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ad = Advertisement::find($id);
        $ad->delete();
        return redirect()->route('advertise.index');
    }
}
