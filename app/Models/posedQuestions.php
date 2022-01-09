<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class posedQuestions extends Model
{
        protected $fillable=[
        'question'
    ];
    use HasFactory;
}
