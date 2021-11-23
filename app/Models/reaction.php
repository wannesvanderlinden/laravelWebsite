<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;
class reaction extends Model
{
    use HasFactory;


     public function news(){
        return $this->belongsTo(News::class);
    }
     public function users(){
        return $this->belongsTo(User::class);
    }
}
