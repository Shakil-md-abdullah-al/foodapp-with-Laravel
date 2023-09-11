<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    private static $cat;
    public static function saveCategory($request)
    {
        self::$cat = new Category();
        self::$cat->category_name = $request->category_name;
        self::$cat->save();
    }

    public static function updateCat($request,$id){
//        return $request;
        self::$cat = Category::find($id);
        self::$cat->category_name = $request->category_name;

        self::$cat->save();
    }
}
