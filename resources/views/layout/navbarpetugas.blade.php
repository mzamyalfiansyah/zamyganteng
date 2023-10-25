<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="bs/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary" style="box-shadow: 0px 0px 8px 1px grey; position:fixed; width:100%; ">
        <div class="container-fluid">
            <h3 class="navbar-brand" style="margin-left: 2%;" >Zamy'sAPP</h3>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 2%;">
                    <ul class="navbar-nav">
                     
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('home-petugas') }}">Home</a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('about') }}">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('data_masyarakat') }}">Masyarakat</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('data_petugas') }}">Petugas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/petugas/logout') }}">Logout</a>
                        </li>

                    </ul>

                    
                    
                </div>
        </div>
    </nav>

</body>
</html>