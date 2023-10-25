<?php

namespace App\Http\Controllers;

use App\Models\pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class pengaduancontroller extends Controller
{
    function index(){

        $judul = "Welcome";


        // $pengaduan = DB::table('pengaduan')->get();
        
        $pengaduan = pengaduan::all();

        return view('home', ['text_judul' => $judul, 'tampil_laporan' => $pengaduan]);
    }

    function buat_laporan(){

        $judul = "Laporkan Pengaduan Anda";

        
        return view('buat-laporan', ['judul_laporan' => $judul]);
    }



    function proses_pengaduan(request $request){


        

        $nama_foto = $request->foto->getClientOriginalName();

        $request->validate([
            'isi_laporan' => 'required|min:15'
        ]);

        $request->foto->storeAs('public/image', $nama_foto);

        $isi_pengaduan = $request->isi_laporan;

        DB::table('pengaduan')->insert([
        
            'nik' => Auth::user()->nik,
            'isi_laporan' => $isi_pengaduan,
            'foto' => $request->foto->getClientOriginalName(),
            'tgl_pengaduan' => date('Y-m-d'),
            'status' => '0'
        ]);
        return redirect('/home');
    }






    function hapus($id){
        DB::table('pengaduan')->where('id_pengaduan', '=', $id)->delete();
        
        return redirect()->back();
    }



    function detailmasyarakat($id){


        $laporan = DB::table('pengaduan')->where('id_pengaduan', '=', $id)->get();
        
        return view('detail', ["data" => $laporan]);
    }







   

    function update_data($id){
        $pengaduan = DB::table('pengaduan')->where('id_pengaduan', '=', $id)->first();
        
        return view('update', ["pengaduan" => $pengaduan]);
    }

   

    function proses_update(request $request, $id){
        $isi_laporan = $request->isi_laporan;

        DB::table('pengaduan')
        ->where('id_pengaduan', $request->id)
        ->update(['isi_laporan' => $request->isi_laporan]);

        return redirect('home');

        }
    
}
