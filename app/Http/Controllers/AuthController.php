<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AuthController extends Controller
{
    public function login(Request $request) {
        
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/home');
        }
    
        return back()->with('loginError', 'Invalid login credentials. Please try again.');
    }

    public function register(Request $req) {
        $validator = $req->validate([
            'email' => 'required|string|unique:users',
            'nama' => 'required',
            'password' => 'required|string|confirmed',
            'no_hp' => 'required|string|unique:users'
        ],
        [
            'no_hp.unique' => "The phone number has already been taken.",
        ]);

        $user = User::create([
            'email' => $validator['email'],
            'nama' => $validator['nama'],
            'password' => bcrypt($validator['password']),
            'role_id' => 1,
            'no_hp' => $validator['no_hp']
        ]);

        return redirect('/login');
    }
    

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
