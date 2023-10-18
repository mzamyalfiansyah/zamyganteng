<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pengaduan</title>

    
</head>
<body>
  


    <!-- <a href="{{ url('home.com') }}">Home</a>
    <a href="{{ url('about.com') }}">About</a>
    <a href="{{ url('login.com') }}">Login</a> -->


<!-- navbar -->
  


@extends('layout.app')

@section('content')


<br>
<br>



<br>
<br>

<div class="container">
      
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">NIK</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Status</th>
                
                <th scope="col">Isi Laporan</th>
                
            </tr>
            
        </thead>
        
        <tbody>

     
        <thead>
            @foreach($data as $laporan)
            <tr>
                <td>{{$laporan->id_pengaduan}}</td>
                <td>{{$laporan->nik}}</td>
                <td>{{$laporan->tgl_pengaduan}}</td>
                <td>{{$laporan->status}}</td>
                

                

                <form action="{{url("/update/$laporan->id_pengaduan")}}" method="POST">

                    @method("POST")
                    @csrf
            
                  
                    <td>
                        <label for="isi_laporan"></label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi_laporan" required>{{$laporan->isi_laporan}}</textarea></td>
                    <td>
                        <ul class="navbar-nav" style="margin-left: 58%;">
                            <li class="nav-item">
                                <button type="submit" class="btn btn-primary">simpan</button>
                            </li>
                        </ul>
                    </td>
            
                </form>

                
            
               

                
            
               
               
            </tr>
        </thead>

        </tbody>

        <thead>
            <th scope="col">Foto</th>
        </thead>

        
    </table>

    <table>
        <tbody>
            <td ><img style="width: 700px;" src="{{asset("storage/image/".$laporan->foto)}}"></td>

            @endforeach
        </tbody>
    </table>
    <br>
    <br>




@endsection
   


</body>
</html>