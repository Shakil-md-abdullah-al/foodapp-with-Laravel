<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('admin.users.manage-user',[
            'users'=>User::orderBy('created_at', 'desc')->get(),
            'office'=>Office::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.add-user');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'name' => 'required',
//            'email' => 'required|email',
//            'date' => 'required|date',
//            'phone' => 'required',
//            'usertype' => 'required|in:1,0,2', // Added validation for user type
//            'office_code' => 'required_if:usertype,2', // Validation for office code if usertype is 2
//            'num_employees' => 'required_if:usertype,2|integer', // Validation for number of employees if usertype is 2
//        ]);

//        dd(request()->all());

        try {
            User::saveUser($request);

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
        return view('admin.users.edit-user',[
            'user'=>User::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            User::updateUser($request,$id);

            return redirect('users')->with('message', 'Added Successfully');
        } catch (\Exception $e) {
            return redirect('users')->with('message', 'Failed to add. Please try again.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usr = User::find($id);
        $usr->delete();
        return back();
    }
}
