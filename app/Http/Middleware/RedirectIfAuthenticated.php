<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // リダイレクト時、ログインしていない場合はホーム画面に遷移
        if (Auth::guard($guard)->check()) {
            return redirect('/');
        }
        return $next($request);
    }
}
