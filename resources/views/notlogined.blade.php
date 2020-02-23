<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>TravelHelper</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        p0{

            font-size: 115px;
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
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 205px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;

        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body >
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/') }}">Home page</a>
                <a href="{{ url('/my_view') }}">My travel</a>
                <a href="{{ url('/view_all') }}">All travel</a>
                <a href="{{ url('/admin') }}">Admin</a>
                <a href="{{ url('/home') }}">User</a>

                <CENTER><p0>TravelHelper</p0></CENTER >




            @else

                <a href="{{ route('login') }}">Login</a>


                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
                <CENTER><p0>TravelHelper</p0></CENTER >
                <script>alert("You are not logined")</script>
            @endauth
        </div>
    @endif






</div>
</body>
</html>
