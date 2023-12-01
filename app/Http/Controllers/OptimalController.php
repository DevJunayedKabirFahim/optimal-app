<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptimalController extends Controller
{
    public function index()
    {
        return view('frontend.home.index');
    }

    public function category()
    {
        return view('frontend.category.index');
    }

    public function detail()
    {
        return view('frontend.product.index');
    }
}
