<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Join extends Model
{
    use HasFactory;
    private static $user;
    public static function saveJoin($request)
    {

        // Create a new Event instance
        $user = new Join();


        $user->name = $request->name;
        $user->usertype = $request->usertype; // Corrected field name
        $user->office_code = $request->office_code;
        $user->num_employees = $request->num_employees;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;

        $user->save();
    }
}
