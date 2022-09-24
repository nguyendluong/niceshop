<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'categories';

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'status',
    ];

    public function subcategory()
    {
        return $this->hasMany(Category::class);
    }
}