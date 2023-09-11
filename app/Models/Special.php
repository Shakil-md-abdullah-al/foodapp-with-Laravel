<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Special extends Model
{
    private static $procuct,$image,$imgUrl,$directory,$imageName,$str;
    use HasFactory;
    public static function saveSpecial($request)
    {
//        dd($request->all());
        self::$procuct = new Special();
        self::$procuct->name = $request->name;
        self::$procuct->price = $request->price;
        self::$procuct->description = $request->description;
        self::$procuct->image = self::saveImage($request);
        self::$procuct->save();
    }

    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imageName = rand().'.'.self::$image->getClientOriginalExtension();
        self::$directory = 'admin-assets/assets/image/products/';
        self::$imgUrl = self::$directory.self::$imageName;
        self::$image->move(self::$directory,self::$imageName);
        return self::$imgUrl;
    }

    public static function updateSpecial($request, $id)
    {
        self::$procuct = Special::find($id);
        self::$procuct->name = $request->name;
        self::$procuct->price = $request->price;
        self::$procuct->description = $request->description;

        // Check if a new image file was uploaded
        if ($request->hasFile('image')) {
            // Get the uploaded file
            $uploadedFile = $request->file('image');

            // Check if the file is valid
            if ($uploadedFile->isValid()) {
                // Remove the old image if it exists
                if (self::$procuct->image && file_exists(self::$procuct->image)) {
                    unlink(self::$procuct->image);
                }

                // Save the new image
                self::$procuct->image = self::saveImage($request);
            }
        }

        self::$procuct->save();
    }


}
