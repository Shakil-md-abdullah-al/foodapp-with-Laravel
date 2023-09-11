<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomOrder extends Model
{
    use HasFactory;

    private static $customOrder;
    public static function saveCustom($request, $user)
    {
        // Create a new CustomOrder instance
        $customOrder = new CustomOrder();
        $customOrder->name = $user->name;
        $customOrder->email = $user->email;
        $customOrder->address = $user->address;
        $customOrder->phone = $user->phone;
        $customOrder->user_id = $user->id;

        // Populate the rest of the fields from the request
        $customOrder->rice = $request->rice;
        $customOrder->veg = $request->veg;
        $customOrder->soft_drinks = $request->soft_drinks;
        $customOrder->lacchi = $request->lacchi;
        $customOrder->meat = $request->meat;
        $customOrder->fish = $request->fish;
        $customOrder->own = $request->own;

        $customOrder->save();
    }



}
