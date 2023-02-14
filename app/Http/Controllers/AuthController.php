<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function view(){
        return view('auth.auth');
    }
    public function authLogin(Request $request){
        $finaldata = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if (Auth::attempt($finaldata)) {
            $request->session()->regenerate();
            return redirect('/');
        }

        return back()->with('fail','Email atau Password Salah!');
    }
    public function authDaftar(Request $request){
        $finaldata = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        $finaldata['password'] = Hash::make($finaldata['password']);
        User::create($finaldata);
        
        return back()->with('message', 'Registrasi Berhasil, Silahkan Login!');
    }

    public function viewProfil(){
        return view('profil.index');
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/auth');
    }
}
