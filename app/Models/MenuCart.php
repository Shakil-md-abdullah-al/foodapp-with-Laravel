<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCart extends Model
{
    use HasFactory;

    private static $cart;
    public static function saveMenuCart($request, $id, $userId, $platter)
    {
        // Create a new Cart instance
        $cart = new MenuCart();

        // Populate the Cart model with user data
        $cart->name = $userId->name;
        $cart->email = $userId->email;
        $cart->phone = $userId->phone;
        $cart->address = $userId->address;
        $cart->user_id = $userId->id;

        // Populate the Cart model with product data
        $cart->p_name = $platter->name;
        $cart->price = $platter->price;
        $cart->description = $platter->description;
        $cart->p_id = $platter->id;

        // Set the quantity based on the request
        $cart->quantity = $request->quantity;

        // Save the Cart model
        $cart->save();
    }

}
