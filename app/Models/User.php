<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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
    public function dealers()
    {
        return $this->hasMany(Dealer::class,'dealerid');
    }

    protected $fillable = [
        'name',
        'email',
        'password',
        'role'
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

    public function dealer()
    {
        return $this->hasOne(Dealer::class,'dealerid');
    }

    public function customer()
    {
        return $this->hasOne(CustomerAddress::class,'customerid');
    }

    public function totals()
    {
        return $this->hasMany(OrderID::class);
    }

    public function costs()
    {
        return $this->hasMany(CostSale::class);
    }
}