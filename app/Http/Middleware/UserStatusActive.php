<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Guard;

class UserStatusActive
{
    /**
     * Create a new filter instance.
     *
     * @param  Guard  $auth
     *
     */
    public function __construct(Guard $auth)
    {
        $this->auth = $auth;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($this->auth->user()->status != 'Active') {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect('/account/logout');
            }
        }

        return $next($request);
    }
}
