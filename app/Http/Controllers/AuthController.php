<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\User;
use App\Models\Saldo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

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

    public function redirectToProvider(){
        return  Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(){
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('email', $user_google->getEmail())->first();

            //jika user ada maka langsung di redirect ke halaman home
            //jika user tidak ada maka simpan ke database
            //$user_google menyimpan data google account seperti email, foto, dsb

            if($user != null){
                \auth()->login($user, true);
                return redirect('/');
            }else{
                $create = User::Create([
                    'email'             => $user_google->getEmail(),
                    'name'              => $user_google->getName(),
                    'password'          => 0,
                    'email_verified_at' => now() // fungsi tgl saat ini
                ]);

                auth()->login($create, true);
                return redirect('/');
            }

        } catch (\Exception $e) {
            return redirect('/');
        }
    }
}