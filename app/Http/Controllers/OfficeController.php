<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Office;
use App\Models\Product;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.office.manage-office',[
            'offices'=>Office::orderBy('created_at', 'desc')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.office.add-office');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
//            dd($request);
            Office::saveOffice($request);

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
        return view('admin.office.edit-office',[
            'office' => Office::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        try {
            Office::updateOffice($request,$id);

            return redirect('office')->with('message', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect('office')->with('message', 'Failed to Update. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Office::find($id);
        if($product->image){
            if(file_exists($product->image)){
                unlink($product->image);
            }
        }
        $product->delete();
        return back();
    }
}
