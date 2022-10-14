<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Custommer extends Model
{
    use HasFactory;    use HasFactory;

    protected $table = 'custommers';

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'is_active',
        'is_block',
        'hash',
        'hash_reset',
        'real_email',
    ];
}
