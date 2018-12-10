<?php

namespace App\Http\Middleware;

use Closure;
use App\Entities\User;
use Illuminate\Support\Facades\Auth;
class PropiAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    if (Auth::guard($guard)->check()) {
        $user = new User();
        $user->id = Auth::user()->id;
        $tipo = $user->tipoUsuario()->get()->all();
        foreach ($tipo as $t){
            $tipouser = $t->id;
        }
        if(isset($tipouser)) {
            if ($tipouser == 2) {} else{
                return redirect('login');
            }
        }}
        return $next($request);
        } }
