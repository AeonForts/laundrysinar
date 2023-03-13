<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ViewController extends Controller
{
    public function admin()
    {
        // dd(Auth::user());
        return view('admin.dashboard');
    }
}
