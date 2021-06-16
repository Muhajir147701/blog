<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MTs As'adiyah Putri II</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="icon" href="https://getbootstrap.com/docs/4.6/assets/img/favicons/favicon.ico">

    <!-- Styles -->
    <style>
    html,
    body {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    .full-height {
        height: 100vh;
    }

    .flex-center {
        align-items: center;
        display: flex;
        justify-content: center;
    }

    .position-ref {
        position: relative;
    }

    .top-right {
        position: absolute;
        right: 10px;
        top: 18px;
    }

    .content {
        text-align: center;
    }

    .title {
        font-size: 84px;
        font-weight: bold;
    }

    .links>a {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }

    .m-b-md {
        margin-bottom: 30px;
    }

    .menusamping {
        margin-top: 5%;
        width: 300px;
        height: 700px;
        background-color: white;
        z-index: 999;
        position: absolute;
    }

    .menusamping li {
        list-style: none;
        border: 1px solid black;
        border-radius: 10px;
        padding: 2px;
        margin: 30px;
        background-color: rgba(76, 175, 80, 0.2);

    }



    .menusamping li a {
        text-decoration: none;
        margin-left: 5px;
        color: red;
        font-weight: bold;

    }

    .content-1 {
        position: absolute;
        visibility: visible;
        left: 25%;
        top: 10%;
        z-index: 888;
    }
    </style>
</head>

<body>




    <!-- //navbar -->
    <!-- <div class="container"> -->
    <div class="menusamping">
        <ul>
            <li><a href="#">Beranda</a> </li>
            <li><a href="#">Informasi Sekolah</a> </li>
            <li><a href="#">Mading Siswa</a> </li>
            <li><a href="#">Informasi Siswa</a> </li>
            <li><a href="#">Jadwal & Kalender</a> </li>
            <li><a href="#">Pustaka</a> </li>
            <li><a href="#">Pendidik & Tendik</a> </li>
            <li><a href="#">PSB</a> </li>

        </ul>
    </div>
    <!-- </div> -->

    <div class="content-1">
        <div class="card" style="width: 40rem;">
            <div class="card-body">
                <h5 class="card-title">Pengumuman</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita voluptatum
                    quisquam magni earum adipisci numquam voluptatibus iure. Corporis, ad quis. Dignissimos numquam
                    asperiores culpa quas magni nemo sunt ut. Ad nulla laboriosam ipsam et laudantium ut dolores itaque.
                    Corporis eius expedita fugiat quaerat omnis porro sunt sed nam quasi dicta? Facilis ipsum illo
                    incidunt rerum. Laboriosam rem eaque nam atque iusto, voluptatem sed laudantium voluptate animi
                    doloribus optio ab vero in, perferendis praesentium libero culpa natus nobis fugit iure corrupti?
                    corrupti fugit tenetur voluptate reiciendis
                    architecto non consequatur est animi at? Voluptates sed quisquam, incidunt tenetur esse ea
                    recusandae, magni eligendi, alias quam error praesentium officia. Suscipit deleniti tempora tenetur,
                    dignissimos, numquam iusto non hic quos ducimus neque eum nisi ab dolores saepe similique. Quas illo
                    quo minus ad? Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
            </div>
        </div>
    </div>









    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
        <div class="top-right links">
            @if (Auth::check())
            <a href="{{ url('/home') }}">Home</a>
            @else
            <a href="{{ url('/login') }}">Login</a>
            <a href="{{ url('/register') }}">Register</a>
            @endif
        </div>
        @endif




    </div>
    </div>

</body>

</html>