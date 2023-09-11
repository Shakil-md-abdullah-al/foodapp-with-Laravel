<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    private static $office,$image,$imgUrl,$directory,$imageName,$str;
    use HasFactory;
    public static function saveOffice($request)
    {
//        dd($request->all());
        self::$office = new Office();
        self::$office->code = $request->code;
        self::$office->o_phone = $request->o_phone;
        self::$office->image = self::saveImage($request);
        self::$office->o_address = $request->o_address;
        self::$office->o_email = $request->o_email;
        self::$office->o_name = $request->o_name;
        self::$office->no_emp = $request->no_emp;
        self::$office->save();
    }

    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'admin-assets/assets/image/office/';
        self::$imgUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imgUrl;
    }

    public static function updateOffice($request,$id)
    {
//        dd($request->all());
        self::$office = Office::find($id);
        self::$office->code = $request->code;
        self::$office->o_phone = $request->o_phone;
        self::$office->o_address = $request->o_address;
        self::$office->o_email = $request->o_email;
        self::$office->o_name = $request->o_name;
        self::$office->no_emp = $request->no_emp;
        if ($request->file('image')){
            if (self::$office->image){
                if (file_exists(self::$office->image)){
                    unlink(self::$office->image);
                }
                self::$office->image = self::saveImage($request);
            }else{
                self::$office->image = self::$office->image;
            }
        }
        self::$office->save();

    }
}
