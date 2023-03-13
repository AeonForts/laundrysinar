<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login_view()
    {

        return view('auth.login');
    }
    /**
     * Handle an authentication attempt.
     */
    public function login_action(Request $request)
    {
        request()->validate(
            [
                'username' => 'required',
                'password' => 'required',
            ]);

        $credentials = $request->only('username','password');

            if (Auth::attempt($credentials)) {
                $user = Auth::user();
                // dd(Auth::user());
                if ($user->role == 'admin') {
                    return redirect()->intended('admin');
                } elseif ($user->role == 'kasir') {
                    return redirect()->intended('kasir');
                } elseif ($user->role == 'owner') {
                    return redirect()->intended('owner');
                }
                return redirect()->intended('/');
            }

        return redirect('auth/login')
                                ->withInput()
                                ->withErrors(['login_gagal' => 'These credentials do not match our records.']);
    }

    public function logout(Request $request)
    {
       $request->session()->flush();
       Auth::logout();
       return Redirect('login');
    }

}
