


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bs/css/bootstrap.min.css">

    <title>Home</title>

  
</head>
<body>

    @include('layout.navbarpetugas')

<br>
<br>
<br>
<br>


{{-- <h1 style="text-align: center;"> WELCOME</h1> --}}





<br>
<br>

<div class="container">
    
        <table class="table">
            <thead>
                <tr>
                   
                    <th scope="col">Tanggal</th>
                    <th scope="col">Isi Laporan</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Status</th>
                    
                   
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>

            @foreach($tampil_laporan as $laporan)

                <tr>
                    
                    <td scope="col" > {{$laporan->tgl_pengaduan}} </td>
                    <td style="max-width: 300px;" scope="col" > {{$laporan->isi_laporan}} </td>
                    <td  scope="col" ><img style="border-radius: 7px;" src="{{asset("storage/image/".$laporan->foto)}}" width="100px"></td>
                    <td style="max-width: 300px;" scope="col" > {{$laporan->status}} </td>
                 
                    
                        <td>  
                            <a class="btn btn-primary" href="/detail/{{$laporan->id_pengaduan}}">Detail</a>
                            <a class="btn btn-danger" href="hapus/{{$laporan->id_pengaduan}}" >x</a>
                        </td>
                        {{-- <td> <a class="btn btn-primary" href="/update/{{$pengaduan->id_pengaduan}}">update</a></td> --}}
                </tr>

            @endforeach

            </tbody>
        </table>
   
</div>



</body>
</html>