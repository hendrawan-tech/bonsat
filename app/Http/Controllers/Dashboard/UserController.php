<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::whereNotIn('id', [1])->get();
        return view('dashboard.user.all', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::whereNotIn('id', [1])->get();
        return view('dashboard.user.create', compact('role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
            'role_id' => 'required'
        ]);
        $data['password'] = Hash::make($data['password']);
        // return $data;
        User::create($data);
        return redirect('/dashboard/users/index')->with('status', 'User Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($index)
    {
        // return $index;
        $user = User::where('id', $index)->first();
        $role = Role::whereNotIn('id', [1])->get();
        return view('dashboard.user.edit', compact('role', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $index)
    {
        $data = $request->validate([
            'name' => 'required',
            'role_id' => 'required'
        ]);
        // return $data;
        $user = User::where('id', $index)->first();
        $user->update($data);
        return redirect('/dashboard/users/index')->with('status', 'User Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($index)
    {
        $user = User::where('id', $index)->first();
        $user->delete();
        return redirect('/dashboard/users/index')->with('status', 'User Deleted');
    }
}
