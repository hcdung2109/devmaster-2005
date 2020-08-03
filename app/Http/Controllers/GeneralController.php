<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function __construct()
    {
        $categories = Category::where(['is_active' => 1])->get();

        view()->share(['categories' => $categories]);
    }
}
