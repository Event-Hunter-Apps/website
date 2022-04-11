<?php

namespace App\Http\Controllers\api;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

class ApiAuthController extends Controller
{
    public function register(Request $request) {
        $validator = $request->validate([
            
            'username' => 'required|string|unique:users',
            'nama' => 'required',
            'password' => 'required|string|confirmed',
            'email' => 'required|string|email:dns|unique:users',
            'no_hp' => 'required|string|unique:users'
        ]);

        $user = User::create([
            'username' => $validator['username'],
            'nama' => $validator['nama'],
            'email' =>  $validator['email'],
            'password' => bcrypt($validator['password']),
            'role_id' => 1,
            'no_hp' => $validator['no_hp']
        ]);

        $token = $user->createToken('secret_key')->plainTextToken;

        $response = [
            'user' => $user,
            'token' => $token,
        ];

        return response($response, 200);
    }
}
