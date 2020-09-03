<?php

namespace App\Http\Controllers\Dashboard;

use App\General;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File as FacadesFile;

class GeneralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $general = General::first();
        return view('dashboard.setting.general', compact('general'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function show(General $general)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function edit(General $general)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, General $general)
    {
        \Tinify\setKey("MvZcgFdPVRKRCKF9T31y723Z7JVddbFC");

        $data = $request->validate([
            'title' => 'required|min:5',
            'logo' => 'file|between:0,2048|mimes:jpeg,jpg,png'
        ]);

        $data = $request->all();

        if ($request['logo']) {
            Storage::delete($general->logo);
            $filetype = $request->file('logo')->extension();
            $source = \Tinify\fromFile($data['logo']);
            $text = 'optimized' . random_int(100, 100000) . '.' . $filetype;
            $source->toFile($text);
            $data['logo'] = Storage::putFile('postImage', new File(public_path($text)));
            FacadesFile::delete(public_path($text));
    }

        $general->update($data);
        return redirect('/dashboard/settings/general')->with('status', 'General Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\General  $general
     * @return \Illuminate\Http\Response
     */
    public function destroy(General $general)
    {
        //
    }
}
