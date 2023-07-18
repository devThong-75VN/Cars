<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OderItem extends Model
{
    protected $fillable = ['oder_id','quantity','product_id','pricetotal'];
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
    public function oder()
    {
        return $this->belongsTo(Oder::class);
    }

    use HasFactory;
}
