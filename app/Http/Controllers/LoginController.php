<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login_page()
    {
        return view('login.login_page');
    }

    public function login(LoginRequest $request)
    {
        $credetionals = $request->validated();
        $remember = $request->remember == '1'? true:false;
        if (Auth::attempt($credetionals, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        } 

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
        //dd($credetionals, $remember);

    }

    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
