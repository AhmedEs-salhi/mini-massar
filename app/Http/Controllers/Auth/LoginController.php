<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request) {
//        dd($request->user());

        $credentials = $request->validate([
            'email' => 'required|string|max:100',
            'password' => 'required|string|max:100'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
//            dd(Auth::user());
            return redirect(strtolower(Auth::user()->role) . '/home');
        }

        return back()->withErrors([
            'errors' => 'Invalid credentials...'
        ])->withInput();
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('login');
    }
}
