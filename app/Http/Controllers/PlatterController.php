<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Platter;
use Illuminate\Http\Request;

class PlatterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.platter.manage',[
            'platters'=>Platter::orderBy('created_at', 'desc')->get()
        ]);
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
        try {
            Platter::savePlatter($request);

            return back()->with('message', 'Added Successfully');
        } catch (\Exception $e) {
            return back()->with('message', 'Failed to add. Please try again.');
        }
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
        return view('admin.platter.edit',[
            'platter' => Platter::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            Platter::updatePlatter($request,$id);

            return redirect('platter')->with('message', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect('platter')->with('message', 'Failed to Update. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $platter = Platter::find($id);
        $platter->delete();
        return back();
    }
}
