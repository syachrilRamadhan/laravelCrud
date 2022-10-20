<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';

        return view('register', $data);
    }

    public function doRegister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'min:8',
            'confirm_password' => 'min:8|same:password',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'role_id' => 1,
            'password' => password_hash($request->password,PASSWORD_BCRYPT)
        ]);

        $user->save();

        return redirect('login')->with('success', 'Registrasi Sukses. Silahkan Login!');
    }

    public function login()
    {
        $data['title'] = 'Login';

        return view('login', $data);
    }

    public function doLogin(Request $request)
    {
       $credentials = $request->validate([
            'email' => 'required', 'email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        Session::flash('status', 'failed');
        Session::flash('message', 'Email atau password salah !');

        return redirect('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }

    public function error()
    {
        return view('error');
    }
}
