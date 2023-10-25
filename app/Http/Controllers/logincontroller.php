<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class logincontroller extends Controller
{
    public function login(){
       
        return view('login');
    }

    public function proses_login(Request $request){



        $datalogin = $request->only("username", "password");
            if(Auth::attempt($datalogin)){
                return redirect('home');
            }else{
                return redirect('login')->with("error", "Username atau password salah");

            }
    }




    public function proses_logout(){
       Auth::logout();
       return redirect('login');
    }





    public function daftar(){
        return view('daftar');
    }

    public function proses_daftar(request $request)
    {
        $data = DB::table("masyarakat")->insert([
            'nik' => $request->nik,
            'nama'=> $request->nama,
            'username' => $request->username,
            'password' => hash::make($request->pw),
            'telp' => $request->telpon
        ]);

        return redirect('login');
    }

}
