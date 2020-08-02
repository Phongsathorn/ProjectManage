<?php

use Illuminate\Support\Facades\Route;

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

Route::get('homeBD', 'ProjectController@itemproject');

Route::get('index', function () {
    return view('homeBDuser');
});


Route::get('test', function () {
    return view('test');
});


// Route::get('homeMDD', 'ProfileMDDController@show');
Route::get('homeMDD', 'Project_MDDController@itemproject');
// Route::get('homeMDD', 'ProfileMDDController@show');

Route::get('addprojectmdd', 'Project_MDDController@viewadd');
Route::post('insertprojectmdd', 'Project_MDDController@insertproject')->name('insertproject');
Route::post('editprojectmdd', 'Project_MDDController@editproject');
Route::get('showdataprojectmdd', 'Project_MDDController@showproject');
Route::get('projectviewmdd', 'Project_MDDController@project');

// Route::get('db', 'ListdataController@addproject');

Route::get('Newarrival', 'ListdataController@Newarrivaldata');

Route::get('Popular', function () {
    return view('pagewedsum.pagePopular');
});

Route::get('wed', function () {
    return view('wedType.wed');
});

Route::get('wedapp', function () {
    return view('wedType.wed&app');
});

Route::get('app', function () {
    return view('wedType.app');
});

Route::get('game', function () {
    return view('wedType.game');
});

Route::get('SearchAdvance', function () {
    return view('searchAV');
});

Route::get('itemdetaliBD', function () {
    return view('project.itemdetaliBD');
});
Route::get('itemdetaliMDD', function () {
    return view('project.itemdetaliMDD');
});


Route::get('Detailproject', function () {
    return view('project.detailproject');
});

Route::get('search', function () {
    return view('search.beforesearchBD');
});

Route::get('addproject', 'ProjectController@viewadd');
Route::post('insertproject', 'ProjectController@insertproject')->name('insertproject');
Route::post('editproject', 'ProjectController@editproject');
Route::get('showdataproject', 'ProjectController@showproject');
Route::get('projectview', 'ProjectController@project');
// Route::post('adddataproject', 'ListdataController@addfileproject');
// Route::post('adddataproject', 'ListdataController@addproject')->name('addproject');
// Route::get('process', 'inputprojectController@addproject') ;
// Route::post('dataproject', 'ListdataController@dataproject');

Route::get('project', function () {
    return view('detailproject');
});

// Route::get('admin', 'ProjectController@itemproject');
Route::get('homeadmin', 'profileadminController@pageadmin');


Route::get('teststap', function () {
    return view('teststap');
});

// Route::get('profile', function () {
//     return view('profileuser');
// });

// Route::get('logout', 'HomeController@index')->name('logout');

// Auth::routes();


Route::view('register','auth.register');
Route::post('registers','RegisterController@register');

Route::get('dbconnect', function () {
    return view('dbconnect');
});

Route::post('loginBD', function () {
    return view('session.session-loginBD');
});

Route::post('loginMDD', function () {
    return view('session.session-loginMDD');
});

// Route::post('insertproject', function () {
//     return view('insertproject');
// });

Route::post('logout', function () {
    return view('session.logout');
});

// Route::get('login', 'logintestController@index');
Route::post('logintestt', 'logintestController@chkauthen');

Route::get('home', 'HomeController@index')->name('home');


// โชว์ข้อมูล
Route::get('dataview', 'ListdataController@Datalist');
Route::get('viewadmin', 'ListdataController@Datalistadmin');
Route::get('viewproject', 'ProjectdataController@showdata');
// ลบข้อมูล
Route::get('delete/{id}', 'ListdataController@destroy');
Route::get('delete/{id}', 'DataadminController@destroy');
Route::get('delete/{id}', 'ListdataController@deleteproject');

// Route::get('edit/{id}', 'DatauserController@edit');
Route::get('edit','DatauserController@index');
Route::get('edit/{id}','DatauserController@show');
Route::post('edit/{id}', 'DatauserController@edit');

Route::get('edituseradmin','DataadminController@index');
Route::get('edituseradmin/{id}','DataadminController@show');
Route::post('edituseradmin/{id}', 'DataadminController@update');

// Route::get('profile','ProfileController@index');
// Route::get('profile/{id}','ProfileController@show');
// Route::post('profile/{id}', 'ProfileController@update');


// Route::view('profile','profileuser');
Route::get('profile','ProfileController@show');
Route::post('profileupdate', 'ProfileController@store')->name('update');
Route::get('profileadmin','profileadminController@show');
Route::post('profileupdateadmin', 'profileadminController@store')->name('update');
// Route::post('uploadimg', 'ProfileController@store')->name('store');
// Route::get('uploadimg', function () {
//     dd(request()->all());
// });


// Route::get('homeBD', 'ListdataController@Data');

// Route::view('edit', 'editdatauser');



// Route::get('update/{id}', 'DatauserController@update');

Route::view('adduser', 'createdatauser');
Route::post('adddata', 'ListdataController@adduser');

// Route::post('adduser', 'ListdataController@adduser');

// Route::view('adduser', 'createdatauser');

// Route::resource('adduser', 'DatauserController');

// Route::view('form', 'edittest');
// Route::get('update', 'updatedatauserController@update');


// Route::get('update/{id}', 'ListdataController@update');
