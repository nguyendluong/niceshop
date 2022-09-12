<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Store extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'stores';

    protected $fillable = [
        'productId',
        'sizeId',
        'quantity',
        'date',
    ];
}
