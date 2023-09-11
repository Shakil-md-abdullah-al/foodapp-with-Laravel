<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    private static $cart;
    public static function saveReview($request,$id,$userId)
    {
        // Create a new Cart instance
        $cart = new Review();

        // Populate the Cart model with data
        $cart->name = $userId->name;
        $cart->email = $userId->email;
        $cart->phone = $userId->phone;
        $cart->address = $userId->address;
        $cart->user_id = $userId->id;

        $cart->product_id = $request->product_id;
        $cart->rating = $request->rating;

        $cart->save();
    }
}
