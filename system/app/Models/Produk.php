<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Traits\Attributes\ProdukAttributes;
use App\Models\Traits\Relations\ProdukRelations;
use Illuminate\Support\Str;

class Produk extends Model
{

    use ProdukRelations, ProdukAttributes;

    protected $table = 'produk';
    protected $primaryKey = 'uuid';
    public $incrementing = false;


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($item) {
            $item->uuid = (string) Str::uuid();
        });
    }
}
