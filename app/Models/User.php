<?php

namespace App\Models;

 use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'office_code',
        'num_employees',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    private static $user;

    public static function saveUser($request){
        self::$user = new User();
        self::$user->usertype = $request->usertype;
        self::$user->office_code = $request->office_code;
        self::$user->location = $request->location;
        self::$user->num_employees = $request->num_employees;
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->phone = $request->phone;
        self::$user->address = $request->address;
        self::$user->num_employees = $request->num_employees;
        self::$user->office_id = $request->office_id;
        self::$user->office_code = $request->office_code;
        self::$user->password = bcrypt($request->password);
        self::$user->save();
    }

    public static function updateUser($request,$id){
//        return $request;
        self::$user = User::find($id);
        self::$user->usertype = $request->usertype;
        self::$user->office_code = $request->office_code;
        self::$user->location = $request->location;
        self::$user->num_employees = $request->num_employees;
        self::$user->name = $request->name;
        self::$user->email = $request->email;
        self::$user->phone = $request->phone;
        self::$user->address = $request->address;
        self::$user->num_employees = $request->num_employees;
        self::$user->office_id = $request->office_id;
        self::$user->office_code = $request->office_code;
        self::$user->password = bcrypt($request->password);

        self::$user->save();
    }
}
