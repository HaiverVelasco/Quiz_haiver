<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ejemplar_Usuario extends Model
{
    use HasFactory;
    public function usuario(){
        return $this->belongsTo('App\Models\Usuario');
        }
        public function ejemplar(){
            return $this->belongsTo('App\Models\Ejemplar');
            }

}
