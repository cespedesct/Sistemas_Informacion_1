<?php

namespace Finilager;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;

class Almacen extends Model
{    use LogsActivity;
    use CausesActivity;
 
    protected $table='almacens';
    protected $fillable = ['id','nombre'.'estado','sucursal_id'];

    public static function almacenes($id){
        return Almacen::where ('sucursal_id','=',$id)
        ->get();
    }
}
