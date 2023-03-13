<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        if (!Auth::check()) {
            // dd(Auth::check());
            return redirect('login');
        }
        $user = Auth::user();

        if($user->role == $roles)
            return $next($request);


<<<<<<< HEAD
        return redirect('login')->with('error',"kamu gak punya akses");
=======
        return redirect('auth/login')->with('error',"kamu gak punya akses");
>>>>>>> 3cc5823 (Commit laundrysinar)
    }
}
