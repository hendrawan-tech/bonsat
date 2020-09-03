<?php

namespace App\Http\Controllers\Dashboard;

use App\Category;
use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as FacadesFile;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('dashboard.post.post', compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('dashboard.post.add', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Tinify\setKey("MvZcgFdPVRKRCKF9T31y723Z7JVddbFC");

        $data = $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'image' => 'file|between:0,2048|mimes:jpeg,jpg,png',
            'status' => 'required',
            'category_id' => 'required',
        ]);

        $data['slug'] = strtolower(str_replace(' ', '-', $data['title']));
        $data['user_id'] = Auth::user()->id;
        $data['latt'] = $request->latt;
        $data['long'] = $request->long;

        $filetype = $request->file('image')->extension();
        $source = \Tinify\fromFile($data['image']);
        $text = 'optimized' . random_int(100, 100000) . '.' . $filetype;
        $source->toFile($text);
        $data['image'] = Storage::putFile('postImage', new File(public_path($text)));
        FacadesFile::delete(public_path($text));

        Post::create($data);

        return redirect('/dashboard/posts/post')->with('status', 'Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories = Category::all();
        return view('dashboard.post.edit', compact('post', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        \Tinify\setKey("MvZcgFdPVRKRCKF9T31y723Z7JVddbFC");

        $data = $request->validate([
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'image' => 'file|between:0,2048|mimes:jpeg,jpg,png',
            'status' => 'required',
            'category_id' => 'required',
        ]);

        $data['latt'] = $request->latt();
        $data['long'] = $request->long();
        
        $data['slug'] = strtolower(str_replace(' ', '-', $data['title']));

        if ($request['image']) {
            Storage::delete($post->image);
            $filetype = $request->file('image')->extension();
            $source = \Tinify\fromFile($data['image']);
            $text = 'optimized' . random_int(100, 100000) . '.' . $filetype;
            $source->toFile($text);
            $data['image'] = Storage::putFile('postImage', new File(public_path($text)));
            FacadesFile::delete(public_path($text));
        }

        $post->update($data);

        return redirect('/dashboard/posts/post')->with('status', 'Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image);
        $post->delete();
        return redirect('/dashboard/posts/post')->with('status', 'Post Deleted');
    }
}
