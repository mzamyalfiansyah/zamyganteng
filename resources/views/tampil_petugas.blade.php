<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <title>Data Petugas</title>
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
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Username</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Level</th>
                </tr>
            </thead>
            <tbody>

            @foreach($tampilpetugas as $tambah)

                <tr>
                    <td scope="col" > {{$tambah->id_petugas}} </td>
                    <td scope="col" > {{$tambah->nama_petugas}} </td>
                    <td scope="col" > {{$tambah->username}} </td>
                    <td scope="col" > {{$tambah->telp}} </td>
                    <td scope="col" > {{$tambah->level}} </td>
                    
                </tr>

            @endforeach

            </tbody>
        </table>



        
            <div class="container-fluid">
    
                        <ul class="navbar-nav" style="margin-left: 73%;">
                            <li class="nav-item">
                                <a class="btn btn-primary" href="{{ url('tambahkan_petugas') }}">+</a>
                            </li>
                        </ul>
                        
                    </div>
            </div>
        


        
   
</div>

@endsection
   


</body>
</html>