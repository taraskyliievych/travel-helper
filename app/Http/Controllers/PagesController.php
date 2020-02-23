<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class PagesController extends Controller
{
    //


    public function request()

    {


    }

    public function  test(Request $request)
    {
        echo "i am big and funny coder";
        //echo $request->input(0);
       /* DB::table('travels')->where('#')->insert(
            ['trip_name' => 'zabuka',
             'start_city' => 'gsdfasd',
             'end_city' => 'gsd213fasd',
             'days' => '1',
             'day_cost' => '2',
             'hotel_per_day_cost' => '3',
             'air_tickets_cost' => '4',
             'other_transport_cost' => '5',
             'ticket_to_city_cost' => '6',
             'ticket_from_city_cost' => '7',
             'autor' => 'garfildThecat',
            ]

        );
        */

    }

    public function index()
    {
        $travels = DB::table('travels')->get();
        return $travels;

    }

    public function delete(Request $request)
    {

        $deleterow =  $request->input("id");
        echo $deleterow;
        DB::table('travels')->where('id',$deleterow)->delete();





    }

    public function edit(Request $request)
    {
        $de =  $request->input("0");
        $d1e =  $request->input("1");
        $d2e =  $request->input("2");
        $d3e =  $request->input("3");
        $d4e =  $request->input("4");
        $d5e =  $request->input("5");
        $d6e =  $request->input("6");
        $d7e =  $request->input("7");
        $d8e =  $request->input("8");
        $d9e =  $request->input("9");
        $d10e =  $request->input("10");
        $d11e =  $request->input("11");

        DB::table('travels')->where('id',$d11e)->update(
            [
                'trip_name' => $de,
                'start_city' => $d1e,
                'end_city' =>  $d2e,
                'days' => $d3e,
                'day_cost' => $d4e,
                'hotel_per_day_cost' => $d5e,
                'air_tickets_cost' => $d6e,
                'other_transport_cost' => $d7e,
                'ticket_to_city_cost' => $d8e,
                'ticket_from_city_cost' => $d9e,
                'autor' => $d10e,
            ]

        );


    }

    public function create(Request $request)

    {

        $d =  $request->input("0");
        $d1 =  $request->input("1");
        $d2 =  $request->input("2");
        $d3 =  $request->input("3");
        $d4 =  $request->input("4");
        $d5 =  $request->input("5");
        $d6 =  $request->input("6");
        $d7 =  $request->input("7");
        $d8 =  $request->input("8");
        $d9 =  $request->input("9");
        $d10 =  $request->input("10");

        DB::table('travels')->where('#')->insert(
            [   'trip_name' => $d,
                'start_city' => $d1,
                'end_city' =>  $d2,
                'days' => $d3,
                'day_cost' => $d4,
                'hotel_per_day_cost' => $d5,
                'air_tickets_cost' => $d6,
                'other_transport_cost' => $d7,
                'ticket_to_city_cost' => $d8,
                'ticket_from_city_cost' => $d9,
                'autor' => $d10,
            ]

        );


        //
    }
    public function logincheak(){
        return (Auth::user(){"name"});


    }

    public function admincheak(){
        if (Auth::user()["name"]=="admin"){
            return view('admin');
        }else{
            return view('notadmin');

        }
    }

    public function comentator(Request $request){

       return view('comentator');

    }

    public function createcomment(Request $request){
        $dc =  $request->input("0");
        $dc1 =  $request->input("1");



        DB::table('CommentTable')->where('#')->insert(
            [   'id' => $dc,
                'comment' => $dc1,

            ]

        );



    }
    public function loadcomment(Request $request){

        $CommentTable = DB::table('CommentTable')->get();
        return $CommentTable;

    }
    public function editecomment(Request $request){
        $dc =  $request->input("0");
        $dc1 =  $request->input("1");



        DB::table('CommentTable')->where('id',$dc)->update(
            [
                'comment' => $dc1,

            ]

        );

    }
    public function clearcoment(Request $request){
        $dcd =  $request->input("0");
        DB::table('CommentTable')->where('id',$dcd)->delete();


    }




}
