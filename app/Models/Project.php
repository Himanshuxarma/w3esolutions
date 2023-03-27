<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    public function domain(){
        return hasMany('App\Models\Domain');
    }
    
    protected $table = 'projects';

    public function category(){
        return $this->hasOne('App\Models\Category', 'id', 'cat_id');
    }
   
}
