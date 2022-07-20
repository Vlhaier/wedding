<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Support\Facades\Auth;

class AuthenticateWithAutoLoginToken
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
        if ($request->user()) {
            return $next($request);
        }

        try {
            if ($auto_login_token = $request->auto_login_token) {
                $user = User::query()
                    ->where('uuid', '=', $auto_login_token)
                    ->firstOrFail();

                Auth::login($user);

                $request->session()->now('success', 'Se inició tu sesión correctamente.');
            }
        } finally {
            return $next($request);
        }
    }
}
