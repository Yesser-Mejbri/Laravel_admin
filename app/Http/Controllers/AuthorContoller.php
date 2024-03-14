<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Specialsession;
use App\Models\Countrie;
use Illuminate\Http\Request;

class AuthorContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Author=author::all();
        $Specialsession=specialsession::all();
        $Countrie=Countrie::all();
        return view ('admin.author',compact('Author','Specialsession','Countrie'));
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
        $author = new Author();
    $author->first_name = $request->first_name;
    $author->last_name = $request->last_name;
    $author->organism = $request->organism;
    $author->id_special = $request->selectSession;
    $author->id_countries =$request->selectCountrie;
    // Save the Author first
    $author->save();



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
        $fo=Author::find($id);
        $fo->first_name=$request->first_name;
        $fo->last_name=$request->last_name;
        $fo->organism=$request->organism;
        $fo->id_special = $request->selectSession;
        $fo->id_countries =$request->selectCountrie;
        $fo->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fo=Author::find($id);
        $fo->delete();
        return back();
    }
}
