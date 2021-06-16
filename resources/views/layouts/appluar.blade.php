<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MTs As'adiyah Putri2</title>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('stl/beranda.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />


</head>

<body>

    <div class="menusamping">
        <ul>
            <li><a href="{{ url('/') }}"><i class=" fa fa-home "></i> Beranda</a> </li>
            <li><a href="{{ url('/informasi') }}"><i class=" fa fa-home "></i> Informasi
                    Sekolah</a> </li>
            <li><a href="{{ url('/mading') }}"><i class=" fa fa-user"></i> Mading Siswa</a>
            </li>
            <li><a href="{{ url('/info') }}"><i class=" fa fa-home "></i> Informasi Siswa</a>
            </li>
            <li><a href="{{ url('/jadwal') }}"><i class=" fa fa-calendar "></i> Jadwal &
                    Kalender</a>
            </li>
            <li><a href="{{ url('/pustaka') }}"><i class=" fa fa-book "></i> Pustaka</a> </li>
            <li><a href="{{ url('/tendik') }}"><i class=" fa fa-home "></i> Pendidik &
                    Tendik</a>
            </li>
            <li><a href="{{ url('/psb') }}"><i class=" fa fa-home "></i> Pendaftaran Siswa
                    Baru</a> </li>

        </ul>
    </div>


    @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>