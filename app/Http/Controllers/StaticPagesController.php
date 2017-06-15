<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticPagesController extends Controller
{
     public function home()
    {
        return view('static_pages/home');
    }

    public function find()
    {
        return view('static_pages/find');
    }

    public function theme()
    {
        return view('static_pages/theme');
    }
}
