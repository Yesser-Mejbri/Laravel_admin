<?php

namespace App\Http\Controllers;

use App\Models\Keynote;
use App\Models\Sponsor;
use Illuminate\Http\Request;

class KeynoteContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Keynote=Keynote::all();
        
        return view ('admin.keyNote',compact('Keynote'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fo=new Keynote();
        $fo->first_name=$request->first_name;
        $fo->last_name=$request->last_name;
        $fo->description=$request->description;
        $fo->website=$request->website;
        $fo->save();
        return back();
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $fo=Sponsor::find($id);
        $fo->first_name=$request->first_name;
        $fo->last_name=$request->last_name;
        $fo->description=$request->description;
        $fo->website=$request->website;
        $fo->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fo=Sponsor::find($id);
        $fo->delete();
        return back();
    }
}
