<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VideoContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Video=Video::all();
        return view ('admin.video',compact('Video'));
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
        $fo=new Video();
        $fo->vpayh=$request->vpayh;
        $fo->title=$request->title;
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
        $fo=Video::find($id);
        $fo->vpayh=$request->vpayh;
        $fo->title=$request->title;
        $fo->order=$request->order;
        $fo->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fo=Video::find($id);
        $fo->delete();
        return back();
    }
}
