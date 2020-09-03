<?php

namespace App\Http\Controllers\Dashboard;

use App\Helpers\Helper;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $user = User::whereNotIn('id', [1])->where('role_id', 3)->count();
        return view('dashboard.home.index', compact('user'));
    }
    public function role()
    {
        return view('dashboard.home.index');
    }
    public function management()
    {
        return view('dashboard.home.index');
    }
}
