<?php

namespace App\Http\Controllers;

use App\Models\Chef;
use App\Models\Office;
use Illuminate\Http\Request;

class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.chef.manage-chef',[
            'chefs'=>Chef::orderBy('created_at', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.chef.add-chef');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
//            dd($request);
            Chef::saveChef($request);

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
        return view('admin.chef.edit-chef',[
            'office' => Chef::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            Chef::updateChef($request,$id);

            return redirect('chef')->with('message', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect('chef')->with('message', 'Failed to Update. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Chef::find($id);
        if($product->image){
            if(file_exists($product->image)){
                unlink($product->image);
            }
        }
        $product->delete();
        return back();
    }
}
