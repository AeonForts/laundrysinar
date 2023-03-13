<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function guest()
    {
        return view('landing_page');
    }
    public function about()
    {
        return view('about');
    }

    public function create()
    {
        return view('pesan');
    }

    public function store()
    {
        return redirect('pesan');
    }

}
