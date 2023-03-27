<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Techstack extends Model
{
    use HasFactory;
    public function domain(){
        return hasMany('App\Models\Domain');
    }
}
