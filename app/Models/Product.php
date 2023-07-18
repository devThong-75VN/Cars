<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name', 'description', 'category_id', 'price', 'slug', 'classifly'];
    public function Category()
    {
        return $this->belongsTo(Category::class);

    }
    use HasFactory;
}
