<?php

Route::get('/', 'HomeController@home');


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

Route::get('/list','ElComponentController@getAllToList' );

Route::get('/item','ElComponentController@getComponentToItem');

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
 Route::post('component/getAll', 'ElComponentController@getAll');
 Route::post('component/getById', 'ElComponentController@getById');
 Route::post('component/deleteById', 'ElComponentController@deleteById');
 Route::post('/component/update', 'ElComponentController@update');
