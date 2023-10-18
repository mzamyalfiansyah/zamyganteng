


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

  
</head>
<body>
  
h1

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


{{-- <h1 style="text-align: center;"> WELCOME</h1> --}}


{{-- <P>zamy ganteng</P> --}}

<h1 style="text-align: center;"> {{$text_judul}} </h1>

<br>
<br>

<div class="container">
    
        <table class="table">
            <thead>
                <tr>
                   
                    <th scope="col">Tanggal</th>
                    <th scope="col">Isi Laporan</th>
                    <th scope="col">Foto</th>
                    
                   
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>

            @foreach($tampil_pengaduan as $pengaduan)

                <tr>
                    
                    <td scope="col" > {{$pengaduan->tgl_pengaduan}} </td>
                    <td style="max-width: 300px;" scope="col" > {{$pengaduan->isi_laporan}} </td>
                    <td scope="col" ><img src="{{asset("storage/image/".$pengaduan->foto)}}" width="100px"></td>
                    
                 
                    
                        <td>  
                            <a class="btn btn-primary" href="/detail/{{$pengaduan->id_pengaduan}}">Detail</a>
                            <a class="btn btn-danger" href="delet/{{$pengaduan->id_pengaduan}}" >x</a>
                        </td>
                        {{-- <td> <a class="btn btn-primary" href="/update/{{$pengaduan->id_pengaduan}}">update</a></td> --}}
                </tr>

            @endforeach

            </tbody>
        </table>
   
</div>

@endsection
   


</body>
</html>