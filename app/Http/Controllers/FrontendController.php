<?php

namespace App\Http\Controllers;

use App\Category;
use App\General;
use App\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $wisata = Post::where('category_id', '1')->get();
        $berita = Post::where('category_id', '2')->take(6)->orderBy('id', 'DESC')->get();
        $galeri = Post::where('category_id', '3')->take(6)->orderBy('id', 'DESC')->get();
        $kuliner = Post::where('category_id', '4')->take(9)->orderBy('id', 'DESC')->get();
        $general = General::first();
        return view('index', compact('general', 'wisata', 'berita', 'galeri', 'kuliner'));
    }

    public function detail($category, $slug)
    {
        $general = General::first();
        $post = Post::skip(0)->take(3)->orderBy('id', 'DESC')->get();
        $wisata = Category::where('slug', $category)->first();
        $detail = Post::where('slug', $slug)->first();
        return view('detail', compact('general', 'wisata', 'detail', 'post'));
    }
}
