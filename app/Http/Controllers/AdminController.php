<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // trang dashboard
    public function index()
    {
        return view('admin.dashboard', []);
    }

    public static function abc()
    {

    }
}

