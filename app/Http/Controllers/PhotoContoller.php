<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PhotoContoller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Photo=photo::all();
        return view ('admin.photo',compact('Photo'));
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
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg|max:2048', 
        ]);
        
        if ($request->hasFile('img')){
            
            $file=$request->file('img');
            $ext=$file->getClientOriginalExtension();
            $filename = uniqid() . '.' . $ext ;
            $file->storeAs('public\techph',$filename);
            
        }
        else{
            $filename="noimage.png";
        }
        $fo=new Photo();
        $fo->image=$filename;
        $fo->alt=$request->alt;
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
        $request->validate([
            'img' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $photo = Photo::findOrFail($id);
    
        // Check if a new image is provided
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $ext = $file->getClientOriginalExtension();
            $filename = uniqid() . '.' . $ext;
            $file->storeAs('public\techph', $filename);
    
            // Delete the old image if it exists (not 'noimage.png')
            if ($photo->image && $photo->image !== 'noimage.png') {
                Storage::delete('public\techph/' . $photo->image);
            }
    
            // Update the image field
            $photo->image = $filename;
        }
    
        // Update other fields
        $photo->alt = $request->alt;
        $photo->title = $request->title;
        $photo->order = $request->order;
    
        // Save the changes
        $photo->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fo=Photo::find($id);
        $fo->delete();
        return back();
    }
}
