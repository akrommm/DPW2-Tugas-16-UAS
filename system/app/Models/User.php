<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\UserDetail;
use App\Models\Produk;
use App\Models\Cart;

class User extends Authenticatable
{
    protected $table = 'user';
    use HasApiTokens, HasFactory, Notifiable;

    // cart
    function cart()
    {
        return $this->hasOne(Cart::class, 'id_user');
    }

    function product()
    {
        return $this->hasMany(Cart::class, 'id_user');
    }

    // pesanan
    function pesanan()
    {
        return $this->hasMany(Pesan::class, 'id_user');
    }

    function detail()
    {
        return $this->hasOne(UserDetail::class, 'id_user');
    }

    function produk()
    {
        return $this->hasMany(Produk::class, 'id_user');
    }

    function getJeniskelaminStringAttribute()
    {
        return ($this->jenis_kelamin == 1) ? "laki-laki" : "perempuan";
    }

    function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    function setUsernameAttribute($value)
    {
        $this->attributes['username'] = strtolower($value);
    }
}
