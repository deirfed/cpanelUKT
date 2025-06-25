<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('pages.dashboard');
    }

    public function reports()
    {
        return view('pages.reports');
    }

    public function availability()
    {
        return view('pages.avail');
    }

    public function information()
    {
        return view('pages.info');
    }

    public function ssh()
    {
        return view('pages.ssh');
    }

    public function users()
    {
        return view('pages.user');
    }
}
