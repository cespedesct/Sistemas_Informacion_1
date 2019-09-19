<?php

namespace Finilager;

use Illuminate\Database\Eloquent\Model;

class ubicaciones extends Model
{
 protected $fillable=  ['lat','long','descripcion','estado'];
}
