<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class sliders extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'sliders';

    protected $fillable = [
        'name',
        'path',
        'status',
        'link',
        'description',
    ];
}
