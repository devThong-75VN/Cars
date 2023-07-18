<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'desc', 'status', 'reciver','user_id'];
    public function oderItems() 
    {
        return $this->hasMany(OderItem::class);
    }
    public function users() 
    {
        return $this->belongsTo(User::class);
    }
    
}
