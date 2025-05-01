<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function index()
    {
        return view('exam.auth.login.index');
    }

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
            'remember' => 'nullable|boolean',
        ]);
        $user = User::where('name', $request->username)->first();
        if (!auth()->check()) {
            if (isset($user) && password_verify($request->password, $user->password)) {
                auth()->login($user, $request->remember);
            } else {
                throw ValidationException::withMessages(['credentials' => 'Invalid credentials.']);
            }
        }
        return redirect()->back();
    }

    public function logout()
    {
        if (auth()->check()) {
            auth()->logout();
        }
        return redirect()->back();
    }
}
