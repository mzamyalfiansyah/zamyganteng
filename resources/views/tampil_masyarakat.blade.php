<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

   
    <title>Data Masyarakat</title>
</head>
<body>

    @include('layout.navbarpetugas')
    
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
                    <th scope="col">NIK</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Telepon</th>
                </tr>
            </thead>
            <tbody>

            @foreach($tampilmasyarakat as $masyarakat)

                <tr>
                    <td scope="col" > {{$masyarakat->nik}} </td>
                    <td scope="col" > {{$masyarakat->nama}} </td>
                    <td scope="col" > {{$masyarakat->username}} </td>
                    <td scope="col" > {{$masyarakat->telp}} </td>
                    
                </tr>

            @endforeach

            </tbody>
        </table>



        
            <div class="container-fluid">
    
                        <ul class="navbar-nav" style="margin-left: 73%;">
                            <li class="nav-item">
                                <a class="btn btn-primary" href="{{ url('daftar') }}">+</a>
                            </li>
                        </ul>
                        
                    </div>
            </div>
        


        
   
</div>

@endsection
   


</body>
</html>