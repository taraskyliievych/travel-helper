<?php
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/admin', function () {
//    return view('admin');
//});
Route::get('/admin',"PagesController@admincheak");

Route::get('/my_view', function () {
    if (Auth::user()==(true)){
        return view('my_view');
    }elseif (Auth::user()==false)
    {

        return view('notlogined');

    }

});

Route::get('/view_all', function () {
    if (Auth::user()==(true)){
        return view('view_all');
    }elseif (Auth::user()==false)
    {

        return view('notlogined');

    }

});



Route::get ('comentator','PagesController@comentator');


Route::get ('create_script','PagesController@create');

Route::get ('index_script','PagesController@index');

Route::get ('delete_script','PagesController@delete');

Route::get ('edit_script','PagesController@edit');

Route:: get ('cheak_login','PagesController@logincheak');




Route:: get ('createcomment','PagesController@createcomment');
Route:: get ('loadcomment','PagesController@loadcomment');

Route:: get ('editecomment','PagesController@editecomment');

Route:: get ('clearcoment','PagesController@clearcoment');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
