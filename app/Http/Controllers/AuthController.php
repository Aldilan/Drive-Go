<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function indexUser()
    {
        $carsData = Car::all();
        $countCar = $carsData->count();
        return view('modules.user.index', ['carsData' => $carsData, 'countCar' => $countCar]);
    }

    public function indexUserLogin()
    {
        if (!Auth::guard('admin')->check()) {
            return view('modules.auth.user.login.index');
        }
    }

    public function indexUserRegis()
    {
        return view('modules.auth.user.regis.index');
    }

    public function indexAdminLogin()
    {
        if (!Auth::guard('admin')->check()) {
            return view('modules.auth.admin.login');
        } else {
            return redirect()->route('index')->with('success', 'Berhasil login!');
        }
    }

    public function loginUser(Request $request)
    {
        if (!Auth::guard('admin')->check()) {
            $this->validate($request, ['username' => 'required', 'password' => 'required']);
            $foundUser  = User::where('username', $request->username)->first();
            if ($foundUser != null) {
                $hashing = Hash::check($request->password, $foundUser->password);
                if ($hashing) {
                    if (Auth::attempt(["username" => $request->username, "password" => $request->password])) {
                        return redirect()->route('index')->with('success', 'Berhasil login!');
                    }
                }
            }
        }
        return back();
    }

    public function loginAdmin(Request $request)
    {
        if (!Auth::guard('admin')->check()) {
            $this->validate($request, [
                'username' => 'required',
                'password' => 'required'
            ]);

            $foundUser = Admin::where('username', $request->username)->first();
            if ($foundUser != null) {
                $hashing = Hash::check($request->password, $foundUser->password);
                if ($hashing) {
                    if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
                        return redirect()->route('admin.index')->with('success', 'Berhasil login!');
                    }
                }
            }
        }
        return back();
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

    public function logoutAdmin()
    {
        return redirect()->route('login')->with(Auth::guard('admin')->logout())->with('success', 'Berhasil keluar!');
    }
}
