<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leeftijdsgroep extends Model
{
    use HasFactory;
     public function Spel(){
    $this->belongsToMany(Spel::class,'leeftijd_spel','spel_id','leeft_id');
}
}
