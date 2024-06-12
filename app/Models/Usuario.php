<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;
    public function ejemplar(){
        return $this->belongsToMany('App\Models\Ejemplar');
        }
}
