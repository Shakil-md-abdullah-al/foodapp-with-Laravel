<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Package;
use App\Models\Product;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.package.add-package',[
            'packages'=>Package::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.package.add-package');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            Package::savePackaget($request);

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
        return view('admin.package.edit',[
            'package' => Package::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            Package::updatePackage($request,$id);

            return redirect('package')->with('message', 'Updated Successfully');
        } catch (\Exception $e) {
            return redirect('package')->with('message', 'Failed to Update. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $package = Package::find($id);
        $package->delete();
        return back();
    }
}
