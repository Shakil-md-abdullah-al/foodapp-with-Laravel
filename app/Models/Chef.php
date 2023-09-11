<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chef extends Model
{
    private static $office,$image,$imgUrl,$directory,$imageName,$str;
    use HasFactory;
    public static function saveChef($request)
    {
//        dd($request->all());
        self::$office = new Chef();
        self::$office->name = $request->name;
        self::$office->pos = $request->pos;
        self::$office->image = self::saveImage($request);
        self::$office->description = $request->description;
        self::$office->cq = $request->cq;
        self::$office->save();
    }

    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'admin-assets/assets/image/chef/';
        self::$imgUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imgUrl;
    }

    public static function updateChef($request,$id)
    {
//        dd($request->all());
        self::$office = Chef::find($id);
        self::$office->name = $request->name;
        self::$office->pos = $request->pos;
        self::$office->description = $request->description;
        self::$office->cq = $request->cq;
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
