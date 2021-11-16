<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\categorie;

class questions extends Model
{
    protected $fillable=[
        'title','answer','categorie_id',
    ];
    use HasFactory;
    public function categorie(){
        return $this->belongsTo(categorie::class);
    }
}
