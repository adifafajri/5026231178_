<!DOCTYPE html>
<html lang="en">

<head>
    <title>Adifa Fajri S : 5026231178</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            background: #f8f9fa;
            font-family: 'Figtree', Arial, sans-serif;
        }
        .jumbotron {
            background: linear-gradient(90deg, #dcdcdc 0%, #aeaeae 100%);
            height: 120px;
            margin-bottom: 0;
            box-shadow: 0 4px 12px rgba(0,0,0,0.07);
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .jumbotron h1 {
            font-size: 2.2rem;
            font-weight: 700;
            color: #2d3a3a;
        }
        .navbar {
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            border-radius: 0 0 10px 10px;
        }
        .navbar-nav .nav-link {
            color: #2d3a3a !important;
            font-weight: 500;
            padding: 10px 18px;
            margin-right: 24px;
            transition: background 0.2s, color 0.2s;
            border-radius: 5px;
        }
        .navbar-nav .nav-link:hover, .navbar-nav .nav-link.active {
            background: #6ec6ca;
            color: #fff !important;
        }
        .container {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 2px 16px rgba(0,0,0,0.06);
            padding: 32px 24px;
            margin-top: 32px;
        }
        @media (max-width: 576px) {
            .jumbotron {
                height: auto;
                padding: 24px 0;
            }
            .jumbotron h1 {
                font-size: 1.2rem;
            }
            .container {
                padding: 16px 8px;
            }
        }
    </style>
</head>

<body>
    <div class="jumbotron text-center mx-auto">
        <h1>Adifa Fajri S : 5026233178</h1>
    </div>
>

    <nav class="navbar navbar-expand-sm bg-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/blog">All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai">Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/tv">Tugas CRUD: TV</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="eas">EAS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan">Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/keranjangbelanja">Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pagecounter">Latihan 3</a>
            </li>
        </ul>
    </nav>
    <br>
    <div class="container">
        @yield('content')
        @yield('scripts')
    </div>

</body>

</html>
