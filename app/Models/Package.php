<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    private static $package;
    use HasFactory;
    public static function savePackaget($request)
    {
//        dd($request->all());
        self::$package = new Package();
        self::$package->name = $request->name;
        self::$package->price = $request->price;
        self::$package->save();
    }

    public static function updatePackage($request,$id)
    {
//        dd($request->all());
        self::$package = Package::find($id);
        self::$package->name = $request->name;
        self::$package->price = $request->price;
        self::$package->save();

    }
}
