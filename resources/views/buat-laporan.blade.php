<?php 



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Buat Laporan</title>
</head>
<body>


@include('layout.navbar')



<br>
<br>
<br>
<br>


<div class="container">

<h2> {{$judul_laporan}} </h2>

<br>
<br>

    <form action="buat_laporan" method="POST" enctype="multipart/form-data">
        
        @method("POST")
        @csrf

        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Tuliskan Laporan Anda</label>
            <textarea class="form-control" name="isi_laporan" id="exampleFormControlTextarea1" rows="3"></textarea>
            @error('isi_laporan')
                <div> {{$message}} </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Pilih Bukti</label>
            <input class="form-control" name="foto" type="file" id="formFileMultiple" multiple>
        </div>

        <button type="submit" class="btn btn-primary">Kirim</button>

    </form>
</div>



</body>
</html>