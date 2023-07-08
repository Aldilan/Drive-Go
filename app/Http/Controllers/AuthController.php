<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function indexUser()
    {
        return view('modules.user.index');
    }
    public function indexLogin()
    {
        return view('modules.auth.login.index');
    }
    public function indexRegis()
    {
        return view('modules.auth.regis.index');
    }
}
