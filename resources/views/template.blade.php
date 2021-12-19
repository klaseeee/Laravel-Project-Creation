<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark" style="background-color: #e3f2fd;">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0" id="navbar_list">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{url('/beranda')}}">Beranda</a></li>
            <li><a class="nav-link" href="{{url('/data_siswa')}}">Data Siswa</a></li>
            <li><a class="nav-link" href="{{url('/info_kegiatan')}}">Info Kegiatan</a></li>
        </ul>
    </nav>
    @yield('content')

    <footer class="bg-dark fixed-bottom">
        <div class="text-center" style="color: white">
            (c) SMKN 44 Jakarta, 2021
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>