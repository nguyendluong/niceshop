<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'users';

    protected $fillable = [
        'role',
        'name',
        'email',
        'password',
        'phone',
        'status',
    ];
}