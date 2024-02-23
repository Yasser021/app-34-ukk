<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class sesiController extends Controller
{
    //
    public function index(){
        return view('auth.login');
    }
    public function login(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            if(Auth::user()->role == 'admin' || Auth::user()->role == 'petugas'){
                Alert::success('Login Berhasil', 'Login Berhasil');
                return redirect()->route('dashboard.index');
            }elseif(Auth::user()->role == 'user'){
                Alert::success('Login Berhasil', 'Login Berhasil');
                return redirect()->route('landingPage.index');
            }
        }else{
            Alert::error('Login Gagal', 'Email atau Password Salah');
            return redirect()->intended('sesi');
        }
    }
    public function showRegister(){
        return view ('auth.register');
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no'=> 'required'
        ]);
        
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'no' => $request->no
        ];

        User::create($data);
        return redirect()->intended('sesi');

    }
    public function logout(){

        Auth::logout();
        Alert::success('Logout Berhasil', 'Logout Berhasil');
        return redirect()->intended('/');

    }
}
