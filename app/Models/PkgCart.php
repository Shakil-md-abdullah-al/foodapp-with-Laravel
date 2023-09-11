<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PkgCart extends Model
{
    use HasFactory;
    private static $cart;
    public static function savePackageCart($request, $id, $userId, $package)
    {
        // Create a new Cart instance
        $cart = new PkgCart();

        // Populate the Cart model with user data
        $cart->name = $userId->name;
        $cart->email = $userId->email;
        $cart->phone = $userId->phone;
        $cart->address = $userId->address;
        $cart->user_id = $userId->id;

        // Populate the Cart model with product data
        $cart->p_name = $package->name;
        $cart->price = $package->price;
//        $cart->description = $package->description;
        $cart->p_id = $package->id;

        // Set the quantity based on the request
        $cart->quantity = $request->quantity;

        // Save the Cart model
        $cart->save();
    }
}
