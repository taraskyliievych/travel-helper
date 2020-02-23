<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ URL::to("https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js") }}"></script>
    <script type="text/javascript" src="{{ URL::to('/tablesorter-master/js/jquery.tablesorter.js') }}"></script>
    <script type="text/javascript" src="{{ URL::to('/tablesorter-master/js/jquery.tablesorter.widgets.js') }}"></script>





    <title>TravelHelper</title>






    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->


    <link rel="stylesheet" href="/tablesorter-master/css/theme.default.css">



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




        input{
            width: 96%;
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


                <tr name="1"  >

                    <th >
                        Trip Name
                    </th>
                    <th   >
                        Start city
                    </th>
                    <th >
                        End city
                    </th>
                    <th >
                        Days
                    </th>
                    <th >
                        Day Cost
                    </th>
                    <th >
                        Hotel per day cost
                    </th>
                    <th >
                        Air tickets cost
                    </th>
                    <th >
                        Other transport cost
                    </th>
                    <th >
                        Ticket to city cost
                    </th>
                    <th >
                        Ticket from city cost
                    </th>
                    <th >
                        Сourier
                    </th>
                    <th>
                        Edit
                    </th>
                    <th>
                        Delete
                    </th>
                </tr>
                </thead>
                <tbody class="tablesorter-no-sort">

                <tr name="2" >
                    <th>
                        <input type="text" name="Trip_Name" placeholder="Trip name" id="Trip_Name">
                    <th>
                       <input type="text" name="Start_City" placeholder="Start city" id="Start_City" >
                    </th>
                    <th>
                        <input type="text" name="End_Сity" placeholder="End city" id="End_Сity" >
                    </th>
                    <th>
                        <input type="number" name="Days" placeholder="Days" id="Days" >
                    </th>
                    <th>
                        <input type="number" name="Day_Cost" placeholder="Day Cost" id="Day_Cost" >
                    </th>
                    <th>
                        <input type="number" name=" Hotel_per_day_cost " placeholder=" Hotel per day cost " id="Hotel_per_day_cost">
                    </th>
                    <th>
                        <input type="number" name="Air_Tickets_Cost" placeholder="Air tickets cost" id="Air_Tickets_Cost">
                    </th>
                    <th>
                        <input type="number" name="Other_Transport_Cost" placeholder="Other transport cost" id="Other_Transport_Cost" >

                    </th>
                    <th>
                        <input type="number" name="Ticket_To_City_Cost" placeholder="Ticket to city cost" id="Ticket_To_City_Cost">
                    </th>
                    <th>
                        <input type="number" name="Ticket_From_City_Cost" placeholder="Ticket from city cost" id="Ticket_From_City_Cost">

                    </th>
                    <th>
                        Сourier
                    </th>

                    <td colspan="2">
                        <button type="button"  id="Create">Create</button>
                    </td>
                    </tr>
                </tbody>

               <tbody id="apnd"></tbody>

            </table>

        </div>
        </div>


    @endif






<script type="text/javascript" src="{{ URL::to('js/scripts_for_my_view.js') }}"></script>
<
</body>
</html>
