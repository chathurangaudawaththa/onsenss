<?php

<<<<<<< HEAD
Route::get('/', function()
{
   return View::make('pages.Home');
});
=======
Route::get('/', 'HomeController@home');
>>>>>>> 24cbc8c79ab8bec081143e1a1bf77687e9595b15


Route::get('/ons-admin', function()
{
   return View::make('admin.login');
});
Route::get('/ons-add', function () {
    return view('admin.add');
});
Route::get('/add-cat', function () {
    return view('admin.add-category');
});
Route::get('/add-sub', function () {
    return view('admin.add-sub');
});

Route::get('/add-component', function () {
    return view('admin.component');
});
<<<<<<< HEAD
// sample routes
Route::get('/list', function () {
    return view('pages.list');
});
Route::get('/item', function () {
    return view('pages.item');
});
// sample routes
=======

Route::get('/list','ElComponentController@getAllToList' );

Route::get('/item','ElComponentController@getComponentToItem');

>>>>>>> 24cbc8c79ab8bec081143e1a1bf77687e9595b15
Route::post('/add-user', 'UserController@AddUser');



Route::get('/eco_tourism', 'UserController@EcoTourism');


Route::post('/confirmation', 'UserController@LogUser');

Route::get('/logout', function(){
    Auth::logout();
    return Redirect::to('admin.login');
 });
   
 //catagry functions
 Route::post('/catagory/save', 'CatagoryController@save');
 Route::post('/catagory/update', 'CatagoryController@update');
 Route::post('/catagory/getAll', 'CatagoryController@getAll');
 Route::post('catagory/deleteById', 'CatagoryController@deleteById');
 Route::post('catagory/getById', 'CatagoryController@getById');

 //sub catagory functions
 Route::post('/sub_catagory/save', 'SubCatagoryController@save');
 Route::post('/sub_catagory/update', 'SubCatagoryController@update');
 Route::post('sub_catagory/getAll', 'SubCatagoryController@getAll');
 Route::post('sub_catagory/deleteById', 'SubCatagoryController@deleteById');
 Route::post('sub_catagory/getById', 'SubCatagoryController@getById');

 //Electric component functions
 Route::post('/component/save', 'ElComponentController@save');
<<<<<<< HEAD
=======
 Route::post('component/getAll', 'ElComponentController@getAll');
 Route::post('component/getById', 'ElComponentController@getById');
 Route::post('component/deleteById', 'ElComponentController@deleteById');
 Route::post('/component/update', 'ElComponentController@update');
>>>>>>> 24cbc8c79ab8bec081143e1a1bf77687e9595b15
