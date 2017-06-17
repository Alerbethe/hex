<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;

class StaticPagesController extends Controller
{
     public function home()
    {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }

        return view('static_pages/home', compact('feed_items'));
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
