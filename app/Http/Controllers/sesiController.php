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
                Alert::success('Success', 'success login');
                return redirect()->route('dashboard.index');
            }elseif(Auth::user()->role == 'user'){
                Alert::success('Success', 'success login');
                return redirect()->route('landingPage.index');
            }
        }else{
            Alert::error('Failed Login', 'Email or Password Wrong');
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
        Alert::success('Success', 'Success Register');
        return redirect()->intended('sesi');

    }
    public function logout(){

        Auth::logout();
        Alert::success('Success', 'Success Logout');
        return redirect()->intended('/');

    }
}
