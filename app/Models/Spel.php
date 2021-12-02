<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Spel extends Model
{
    use HasFactory;
      public function Leeftijdsgroepen(){
        return $this->belongsToMany(Leeftijdsgroep::class);
    }
}
