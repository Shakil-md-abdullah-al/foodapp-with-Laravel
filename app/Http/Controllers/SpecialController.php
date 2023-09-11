<?php

namespace App\Http\Controllers;

use App\Models\EventManage;
use App\Models\Package;
use App\Models\Special;
use Illuminate\Http\Request;

class SpecialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.special.add', [
            'special' => Special::orderBy('created_at', 'desc')->get()
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
//            dd($request);
            Special::saveSpecial($request);

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
        return view('admin.special.edit-special',[
            'office' => Special::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            Special::updateSpecial($request,$id);

            return redirect('special')->with('message', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect('special')->with('message', 'Failed to Update. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Special::find($id);

        if (!$product) {
            return back()->with('error', 'Product not found.');
        }

        if($product->image){
            if(file_exists($product->image)){
                unlink($product->image);
            }
        }

        $product->delete();

        return back()->with('success', 'Product deleted successfully.');
    }
}
