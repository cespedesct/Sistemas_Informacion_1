<?php

namespace Finilager;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;
class Sucursal extends Model
{ 

    use LogsActivity;
    use CausesActivity;
 
 protected $table='sucursals';
 protected $fillable = ['id','ubicacion'.'estado','perfil','id_ubicacion'];
 protected static $logFillabel=true;

}
