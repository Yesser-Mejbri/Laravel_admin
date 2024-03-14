<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;



class TweetContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Tweet=tweet::all();
        
        return view ('admin.tweets',compact('Tweet'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fo=new Tweet();
        $fo->link=$request->link;
        $fo->date=$request->date;
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
        $fo=Tweet::find($id);
        $fo->link=$request->link;
        $fo->date=$request->date;
        $fo->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fo=Tweet::find($id);
        $fo->delete();
        return back();
    }
}
