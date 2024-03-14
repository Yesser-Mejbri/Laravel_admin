<?php

namespace App\Http\Controllers;

use App\Models\Countrie;
use Illuminate\Http\Request;

class CountrieContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Countrie=countrie::all();
        return view ('admin.countries',compact('Countrie'));
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
        $fo=new Countrie();
        $fo->name=$request->name;
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
        $fo=Countrie::find($id);
        $fo->name=$request->name;
        $fo->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fo=Countrie::find($id);
        $fo->delete();
        return back();
    }
}
