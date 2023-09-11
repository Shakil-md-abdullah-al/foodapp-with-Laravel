<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\User;

class Cart extends Model
{
    use HasFactory;
    private static $cart;
    public static function saveCart($request,$id,$userId,$products,$platter)
    {
        // Create a new Cart instance
        $cart = new Cart();

        // Populate the Cart model with data
        $cart->name = $userId->name;
        $cart->email = $userId->email;
        $cart->phone = $userId->phone;
        $cart->address = $userId->address;
        $cart->user_id = $userId->id;

        $cart->product_title = $products->title;

        // Calculate the price based on whether there is a discount price
        if ($products->discount_price !== null) {
            $cart->price = $products->discount_price * $request->quantity;
        } else {
            $cart->price = $products->price * $request->quantity;
        }

        $cart->image = $products->image;
        $cart->product_id = $products->id;


        $cart->quantity = $request->quantity;

        // Save the Cart model
        $cart->save();
    }

}
