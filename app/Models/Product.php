<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    private static $procuct,$image,$imgUrl,$directory,$imageName,$str;
    use HasFactory;
    public static function saveProduct($request)
    {
//        dd($request->all());
        self::$procuct = new Product();
        self::$procuct->title = $request->title;
        self::$procuct->description = $request->description;
        self::$procuct->image = self::saveImage($request);
        self::$procuct->category = $request->category;
        self::$procuct->quantity = $request->quantity;
        self::$procuct->price = $request->price;
        self::$procuct->discount_price = $request->discount_price;
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

    public static function updateProduct($request,$id)
    {
//        dd($request->all());
        self::$procuct = Product::find($id);
        self::$procuct->title = $request->title;
        self::$procuct->description = $request->description;
        self::$procuct->category = $request->category;
        self::$procuct->quantity = $request->quantity;
        self::$procuct->price = $request->price;
        self::$procuct->discount_price = $request->discount_price;
        if ($request->file('image')){
            if (self::$procuct->image){
                if (file_exists(self::$procuct->image)){
                    unlink(self::$procuct->image);
                }
                self::$procuct->image = self::saveImage($request);
            }else{
                self::$procuct->image = self::$procuct->image;
            }
        }
        self::$procuct->save();

    }
    public function productRating()
    {
        return $this->hasOne(Review::class,'product_id');

    }
}
