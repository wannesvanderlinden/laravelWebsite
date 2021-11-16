<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\questions;
class categorie extends Model
{

    protected $fillable=[
        'name','summary'
    ];
    use HasFactory;
    public function questions(){
        return $this->hasMany(questions::class);
    }
}
