<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return Inertia::render('Auth/LoginPage');
    }

    public function login(Request $request)
    {

        $credentials = $request->only('username', 'password');

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            // Authentication passed
            return redirect()->intended($this->redirectTo);
        } else {
            // Authentication failed
            return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect($this->redirectTo);
    }
}
