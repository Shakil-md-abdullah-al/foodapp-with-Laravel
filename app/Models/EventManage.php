<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventManage extends Model
{
    private static $office,$image,$imgUrl,$directory,$imageName,$str;
    use HasFactory;
    public static function saveEvent($request)
    {
//        dd($request->all());
        self::$office = new EventManage();
        self::$office->name = $request->name;
        self::$office->place = $request->place;
        self::$office->image = self::saveImage($request);
        self::$office->description = $request->description;
        self::$office->timedate = $request->timedate;
        self::$office->save();
    }

    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'admin-assets/assets/image/event/';
        self::$imgUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imgUrl;
    }

    public static function updateEvent($request,$id)
    {
//        dd($request->all());
        self::$office = EventManage::find($id);
        self::$office->name = $request->name;
        self::$office->place = $request->place;
        self::$office->description = $request->description;
        self::$office->timedate = $request->timedate;
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
