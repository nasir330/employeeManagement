<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'userType',
        'email',
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
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //table relation with employee
    public function userTypes() {
        return $this->belongsTo(UserType::class, 'userType', 'id');
    }
    //table relation with employee
    public function employees() {
        return $this->hasOne(Employees::class, 'userId', 'id');
    }
    //table relation with financial
    public function financials() {
        return $this->hasOne(Financial::class, 'userId', 'id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function($model){
            if (self::count() === 0) { // check if the user table is empty
                $model->userType = 1; // set the user_type value to 1
            }
        });
    }
}
