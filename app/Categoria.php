<?php

namespace Finilager;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Spatie\Activitylog\Traits\CausesActivity;
class Categoria extends Model
{   use LogsActivity;
    use CausesActivity;
    //
}
