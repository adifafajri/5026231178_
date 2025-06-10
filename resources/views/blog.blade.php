@extends('template')

@section('content')

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <style>
        body {
            color: rgb(247, 247, 247);
            font-family: "Karla", sans-serif;
            background-image: url('https://images5.alphacoders.com/418/thumb-1920-418889.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }

        .top-icons {
            position: absolute;
            width: 580px;
            top: 20px;
            display: flex;
            justify-content: space-between;
            padding: 20 20px;
            color: aliceblue;
            font-size: 20px;
        }

        .title {
            margin-top: 20px;
            margin-bottom: 5px;
            font-weight: 600;
            font-size: 22px;
        }

        .title p {
            margin-top: 5px;
            margin-bottom: 1px;
        }

        .bio-text {
            font-size: 16px;
            font-weight: 300;
            margin-top: -5px;
        }
    </style>

<body>
    <div class="container w-50 d-flex flex-column align-items-center py-5">

        <img src="foto_adifa.png" class="rounded-circle"
            style="width: 100px; height: 100px; object-fit: cover; position: relativece; margin-top: 20px;" />

        <div class="title text-center">ADIFA FAJRI SAMPURNO
        </div>

        <div class="bio-text text-center">
            <p>5026231178 - PEMROGAMAN WEB (C)</p>
        </div>

        <div class="d-flex justify-content-center mt-4 hover-zoom">
            <a href="{{ url('pertemuan1') }}" style="text-decoration: none; width: 600px;">
                <div
                    style="background-color: white; border-radius: 8px;; padding: 20px 50px; display: flex; justify-content: center; align-items: center;">
                    <p class="font-weight-bold m-0 text-center" style="font-size: smaller; color: black;">
                        Pertemuan 1
                    </p>
                </div>
            </a>
        </div>

        <div class="d-flex justify-content-center mt-4 hover-zoom">
            <a href="{{ url('latihanpertemuan1') }}" style="text-decoration: none; width: 600px;">
                <div
                    style="background-color: white; border-radius: 8px; padding: 20px 50px; display: flex; justify-content: center; align-items: center;">
                    <p class="font-weight-bold m-0 text-center" style="font-size: smaller; color: black;">
                        Pertemuan 1 (Latihan Mandiri)
                    </p>
                </div>
            </a>
        </div>

        <div class="d-flex justify-content-center mt-4 hover-zoom">
            <a href="{{ url('bootstrap2pertemuan3') }}" style="text-decoration: none; width: 600px;">
                <div
                    style="background-color: white; border-radius: 8px; padding: 20px 50px; display: flex; justify-content: center; align-items: center;">
                    <p class="font-weight-bold m-0 text-center" style="font-size: smaller; color: black;">
                        Bootstrap Pertemuan 3
                    </p>
                </div>
            </a>
        </div>

        <div class="d-flex justify-content-center mt-4 hover-zoom">
            <a href="{{ url('bootstraplatihanpertemuan4') }}" style="text-decoration: none; width: 600px;">
                <div
                    style="background-color: white; border-radius: 8px; padding: 20px 50px; display: flex; justify-content: center; align-items: center;">
                    <p class="font-weight-bold m-0 text-center" style="font-size: smaller; color: black;">
                        Latihan Bootstrap Pertemuan 4
                    </p>
                </div>
            </a>
        </div>


        <div class="d-flex justify-content-center mt-4 hover-zoom">
            <a href="{{ url('bootstraplinktreepertemuan5') }}" style="text-decoration: none; width: 600px;">
                <div
                    style="background-color: white; border-radius: 8px; padding: 20px 50px; display: flex; justify-content: center; align-items: center;">
                    <p class="font-weight-bold m-0 text-center" style="font-size: smaller; color: black;">
                        Bootstrap Linktree Tugas Pertemuan 5
                    </p>
                </div>
            </a>
        </div>

        <div class="d-flex justify-content-center mt-4 hover-zoom">
            <a href="{{ url('js1pertemuan7') }}" style="text-decoration: none; width: 600px;">
                <div
                    style="background-color: white; border-radius: 8px; padding: 20px 50px; display: flex; justify-content: center; align-items: center;">
                    <p class="font-weight-bold m-0 text-center" style="font-size: smaller; color: black;">
                        JavaScript 1 Pertemuan 7
                    </p>
                </div>
            </a>
        </div>

        <div class="d-flex justify-content-center mt-4 hover-zoom">
            <a href="{{ url('js2pertemuan7') }}" style="text-decoration: none; width: 600px;">
                <div
                    style="background-color: white; border-radius: 8px; padding: 20px 50px; display: flex; justify-content: center; align-items: center;">
                    <p class="font-weight-bold m-0 text-center" style="font-size: smaller; color: black;">
                        JavaScript 2 Pertemuan 7
                    </p>
                </div>
            </a>
        </div>

        <div class="d-flex justify-content-center mt-4 hover-zoom">
            <a href="{{ url('danantarapertemuan8') }}" style="text-decoration: none; width: 600px;">
                <div
                    style="background-color: white; border-radius: 8px; padding: 20px 50px; display: flex; justify-content: center; align-items: center;">
                    <p class="font-weight-bold m-0 text-center" style="font-size: smaller; color: black;">
                        Danantara Pertemuan 8
                    </p>
                </div>
            </a>
        </div>

                <div class="d-flex justify-content-center mt-4 hover-zoom">
            <a href="https://adifafajri.github.io" style="text-decoration: none; width: 600px;">
                <div
                    style="background-color: white; border-radius: 8px; padding: 20px 50px; display: flex; justify-content: center; align-items: center;">
                    <p class="font-weight-bold m-0 text-center" style="font-size: smaller; color: black;">
                        ETS
                    </p>
                </div>
            </a>
        </div>

    </div>
</body>
</head>

@endsection
