<?php

namespace App\Http\Middleware;

use Closure;

class mainAdmin
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
        // dd($request);
        $user = \Auth::user();
        
        if ($user->email != "admin@gmail.com") {            
            return redirect()->route("admin.blog.manage");
        }
        return $next($request);
    }
}
