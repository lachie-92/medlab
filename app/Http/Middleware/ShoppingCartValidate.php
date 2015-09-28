<?php

namespace App\Http\Middleware;

use Closure;

class ShoppingCartValidate
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
        $ShoppingCartHasItem = count($request->session()->get('basket', [])) > 0;

        if ($ShoppingCartHasItem == false) {
            if ($request->ajax()) {
                return response('Unauthorized.', 401);
            } else {
                return redirect('/shoppingcart/cart');
            }
        }

        return $next($request);
    }
}
