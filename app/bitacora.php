<?php

namespace Finilager;

use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    protected $table='activity_log';
 protected $fillable = ['id','log_name','description','subject_id','subject_type'];
 
}
