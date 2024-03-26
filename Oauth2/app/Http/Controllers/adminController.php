<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function create()
    {
        return view('admin.dashboard');
    }
}
