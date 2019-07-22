<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Terjual extends Model
{
    protected $table = "terjual";

    protected $fillable = [
        'jumlah',
        'produk_id',
        'customer_id'
    ];
}
