<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
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

    public function regisUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'username' => 'required|string|unique:users',
            'password' => 'required|string',
            'phone_number' => 'required|string',
            'address' => 'required|string',
            'license_id' => 'required|string',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'license_id' => $request->license_id,
        ]);
        return redirect()->route('login')->with('success', 'Akun berhasil dibuat!');
    }
}
