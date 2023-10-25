<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class masyarakatcontroller extends Controller
{
    function tampil(){

        $masyarakat = DB::table('masyarakat')->get();
      
        return view('tampil_masyarakat', ['tampilmasyarakat' => $masyarakat]);
    }

   




    function tambahkan_masyarakat(){

        return view('tambahkan_masyarakat');

    }

    function proses_tambah(request $request){

        $isi_nik =$request->nik;
        $isi_nama = $request->nama;
        $isi_username = $request-> username;
        $isi_password = $request->pw;
        $isi_telp = $request->telpon;

        DB::table('masyarakat')->insert([
            'nik' => $isi_nik,
            'nama' => $isi_nama,
            'username' => $isi_username,
            'password' => hash::make($isi_password),
            'telp' => $isi_telp
        ]);
        return redirect('/data_masyarakat');
    }

    






    function tampilkan(){

        $tambah = DB::table('petugas')->get();
      
        return view('tampil_petugas', ['tampilpetugas' => $tambah]);
    }


    function tambah_petugas(){

        
        return view('tambah_petugas');

    }

    function proses_petugas(request $request){
        
        $isi_id = $request->id;
        $isi_nama = $request->nama_petugas;
        $isi_username = $request->username;
        $isi_password = $request->password;
        $isi_telp = $request->telp;
        $isi_level = $request->level;
    
        DB::table('petugas')->insert([
            'id' => $isi_id,
            'nama_petugas' => $isi_nama,
            'username' => $isi_username,
            'password' => hash::make($isi_password),
            'telp' => $isi_telp,
            'level' => "petugas"
        ]);
        return redirect('/login-petugas');
    }


}
