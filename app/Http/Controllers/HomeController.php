<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;
use App\Models\Tour;

class HomeController extends Controller
{
    public function index()
    {

        // Lấy tất cả các tour
        $tours = Tour::latest()->get();
        $posts = BlogPost::All();

        return view('pages.home', compact('posts', 'tours'));
    }
}
