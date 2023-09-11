<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platter extends Model
{
    private static $platter;
    use HasFactory;
    public static function savePlatter($request)
    {
//        dd($request->all());
        self::$platter = new Platter();
        self::$platter->name = $request->name;
        self::$platter->price = $request->price;
        self::$platter->description = $request->description;
        self::$platter->save();
    }

    public static function updatePlatter($request,$id)
    {
//        dd($request->all());
        self::$platter = Platter::find($id);
        self::$platter->name = $request->name;
        self::$platter->price = $request->price;
        self::$platter->description = $request->description;
        self::$platter->save();

    }
}
