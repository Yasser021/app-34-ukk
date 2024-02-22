<?php

namespace App\Http\Controllers;

use App\Models\buku;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

        if (Auth::attempt($data) == Auth::user($role = 'admin') || Auth::user($role = 'petugas')) {
            return redirect()->route('dashboard.index');
        }elseif(Auth::attempt($data) == Auth::user($role = 'user')){
            return redirect()->route('landingPage.index');
        }else{
            return redirect()->intended('sesi');
        }

        // // if (Auth::attempt() == Auth::user($role = 'admin') || Auth::attempt() == Auth::user($role = 'petugas')) {
        // //     return redirect()->intended('/dashboard');
        // // }elseif(Auth::attempt() == Auth::user($role = 'user')){
        // //     return redirect()->intended('/');
        // // }else{
        // //     return redirect()->intended('sesi');
        // // }
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
        return redirect()->intended('/');

    }
}
