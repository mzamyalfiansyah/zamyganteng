<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href={{asset("bs/css/bootstrap.min.css")}}>
    <title>Document</title>
</head>
<body>
    @include('layout.navbar')

    <div class="container">
        @yield('content')
    </div>
</body>
</html>