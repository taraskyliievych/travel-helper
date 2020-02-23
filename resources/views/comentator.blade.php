<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ URL::to("https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js") }}"></script>
    <script type="text/javascript" src="{{ URL::to('/tablesorter-master/js/jquery.tablesorter.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('/tablesorter-master/js/jquery.tablesorter.widgets.js') }}"></script>

    <title>TravelHelper</title>

    <link rel="stylesheet" href="/tablesorter-master/css/theme.default.css">






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

        .full-height {
            height: 10vh;
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

        .table{

            position: relative;
            top: 40px;
            border: 1px solid black;
            margin: auto;
        }
        th,tbody, tr, td{
            border: 1px solid black;

        }
        button{
            display: block;
            margin: auto;
        }
        #comntbtn{
            width: 100%;
            height: 40px;
            font-size: 30px;
            resize: none;
        }
        #comntbtn1{
            width: 100%;
            height: 40px;
            font-size: 30px;
            resize: none;
        }
        #comentintput{
            width: 100%;
            height: 90px;
            font-size: 20px;
            resize: none;


        }
        #areacom{
            width: 100%;
            height: 50px;
            font-size: 25px;
            resize: none;


        }
        #coment_histori{

            font-size: 20px;

        }

        input{
            width: 98%;
        }


        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
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
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/') }}">Home page</a>
                <a href="{{ url('/my_view') }}">My travel</a>
                <a href="{{ url('/view_all') }}">All travel</a>
                <a href="{{ url('/admin') }}">Admin</a>
                <a href="{{ url('/home') }}">User</a>



            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>



        <div class = "table" id="tableid">
            <table  id="myTable" class="sortable">
                <thead>

                <tr name="1" >
                    <th>
                        Trip Name
                    <th>
                        Start city
                    </th>
                    <th>
                        End city
                    </th>
                    <th>
                        Days
                    </th>
                    <th>
                        Day Cost
                    </th>
                    <th>
                        Hotel per day cost
                    </th>
                    <th>
                        Air tickets cost
                    </th>
                    <th>
                        Other transport cost
                    </th>
                    <th>
                        Ticket to city cost
                    </th>
                    <th>
                        Ticket from city cost
                    </th>
                    <th>
                        Сourier
                    </th>


                </tr>
                </thead>

                <tbody id="apnd"></tbody>
                <tbody>
                <tr>
                    <th colspan="11">

                        <textarea id="comentintput" placeholder="Comment Text"></textarea>
                    </th>
                </tr>
                </tbody>
                <tbody>
                <tr>
                    <th colspan="11">
                        <button id="comntbtn">Comment</button>

                    </th>
                </tr>
                </tbody>
                <tbody id="coment_histori"></tbody>
                <tbody id="admincomment"></tbody>
            </table>

        </div>
</div>


@endif






</div>

<script type="text/javascript" src="{{ URL::to('js/script_for_coment.js') }}"></script>




</body>
</html>
