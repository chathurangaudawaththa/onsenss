<?php

Route::get('/', function()
{
   return View::make('pages.Home');
});


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

