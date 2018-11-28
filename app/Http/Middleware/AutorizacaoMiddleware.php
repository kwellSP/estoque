<?php

namespace estoque\Http\Middleware;

use Closure;

class AutorizacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
           if (!$request->is('login') && \Auth::Guest() && !$request->is('register') 
           && !$request->is('password/reset')){
        return redirect('login');
    }
        return $next($request);
    }
}
