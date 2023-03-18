<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //

    public function index()
    {
        return view('login.index');
    }

    public function register()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
            'password' => 'required|min:4'
        ]);

        $registeredUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'identifier' => 'U' . Str::random(7)
        ]);

        Auth::loginUsingId($registeredUser->id);
        return redirect('/');
    }

    public function authenticate(Request $request)
    {
        $login = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);


        $remember_me = $request->has('remember_me') ? true : false;


        if (Auth::attempt($login, $remember = $remember_me)) {
            if (auth()->user()->role == 'admin') {
                return redirect()->intended('/dashboard');
            }
            return redirect()->intended('/');
        }
        throw ValidationException::withMessages(['email', 'password' => 'Email/Password salah']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->intended('/');
    }
}
