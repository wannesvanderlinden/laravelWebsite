<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categorie;

class questions extends Model
{
    use HasFactory;
    public function categories(){
        return $this->belongsTo(categorie::class);
    }
}
