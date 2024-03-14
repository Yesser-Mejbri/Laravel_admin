<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\User_Admin;
use Illuminate\Http\Request;

class UserAdminController extends Controller
{
    public function index()
    {
        $User_Admin=User::all();
        return view ('admin.users',compact('User_Admin'));
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
        $fo=User::find($id);
        $fo->status=$request->selectStatus;
        $fo->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $fo=User::find($id);
        $fo->delete();
        return back();
    }
}
