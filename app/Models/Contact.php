<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{

    private static $message;
    use HasFactory;
    public static function saveMessage($request)
    {
//        dd($request->all());
        self::$message = new Contact();
        self::$message->name = $request->name;
        self::$message->email = $request->email;
        self::$message->subject = $request->subject;
        self::$message->message = $request->message;
        self::$message->status = 'In Progress';
        self::$message->save();
    }
}
