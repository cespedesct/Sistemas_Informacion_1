<?php

namespace Finilager\Http\Middleware;

use Closure;
use Auth;
class CheckVendedor
{    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   $userRoles=Auth::user()->roles->pluck('nombre');
     
        if(!$userRoles->contains('Vendedor')){
            return redirect('/permiso_denegado');
        }
        
        return $next($request);
    }
}
