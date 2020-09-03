<?php

namespace App\Http\Controllers;

use App\General;
use App\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $wisata = Post::where('category_id', '1')->get();
        $general = General::first();
        return view('index', compact('general', 'wisata'));
    }
}
