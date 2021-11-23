<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
protected $fillable=[
        'title','content','img',
    ];
    public function reactions(){
        return $this->hasMany(reaction::class);
    }
}
