<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar extends Model
{
    use HasFactory;
    public function libro(){
        return $this->belongsTo('App\Models\Libro');
        }
        public function usuario(){
            return $this->belongsToMany('App\Models\Usuario');
            }
}

