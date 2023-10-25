<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pengaduan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class loginpetugascontroller extends Controller
{
    function loginpetugas(){
        return view('petugas_login');
    }

    function proseslogin(Request $request){

        
        $datalogin = $request->only("username", "password");
            if(Auth::guard('petugas')->attempt($datalogin)){
                
                return redirect('home-petugas');

            }else{

                return redirect('login-petugas')->with("error", "Username atau password salah");

            }
       
    }

   

    function proseslogout(){
        Auth::guard('petugas')->logout();
        return redirect('login-petugas');
    }




    function petugashome(){

        $judul = "Laporan Masyarakat";


        // $pengaduan = DB::table('pengaduan')->get();
        
        $laporan = pengaduan::all();

        return view('homepetugas', ['text_judul' => $judul, 'tampil_laporan' => $laporan]);
    }

    
    function hapus($id){
        DB::table('pengaduan')->where('id_pengaduan', '=', $id)->delete();
        
        return redirect()->back();
    }


    function detail_($id){


        $laporan = DB::table('pengaduan')->where('id_pengaduan', '=', $id)->get();
        
        return view('detailpetugas', ["data" => $laporan]);
    }




    function tampil(){


        echo "ERROR 404";

        // $masyarakat = DB::table('masyarakat')->get();
      
        // return view('datamasyarakat', ['tampilmasyarakat' => $masyarakat]);
    }

    function tampilkan(){


        echo "ERROR 404";

        // $tambah = DB::table('petugas')->get();
      
        // return view('tampil_petugas', ['tampilpetugas' => $tambah]);
    }


    function update_data($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', '=', $id)->first();
        
        return view('update', ["pengaduan" => $pengaduan]);
    }

   

    function proses_update(request $request, $id){
        
        $status = $request->status;

        DB::table('pengaduan')
        ->where('id_pengaduan', $request->id)
        ->update(['status' => $request->status]);

        return redirect('home-petugas');

        }

   
}
