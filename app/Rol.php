<?php

namespace Finilager;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Rol extends Model
{   protected $table = "roles";
    protected $filliable  = ['nombre','descripcion'];
    public function users(){
        return $this->belongsToMany('Finilager\User');
    }
}
