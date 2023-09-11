<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    private static $procuct;
    use HasFactory;
    public static function saveSlider($request)
    {
        self::$product = new Slider();
        self::$product->name = $request->name;
        self::$product->subname = $request->subname; // Make sure this matches the column name
        self::$product->description = $request->description;
        self::$product->save();
    }

}
