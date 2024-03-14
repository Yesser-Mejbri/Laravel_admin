<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialsession;
class SpecialSessionContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Specialsession=specialsession::all();
        
        return view ('admin.session',compact('Specialsession'));
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
        $fo=new Specialsession();
        $fo->title=$request->title;
        $fo->description=$request->description;
        $fo->order=$request->order;
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
        $fo=Specialsession::find($id);
        $fo->title=$request->title;
        $fo->description=$request->description;
        $fo->order=$request->order;
        $fo->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fo=Specialsession::find($id);
        $fo->delete();
        return back();
    }
}
