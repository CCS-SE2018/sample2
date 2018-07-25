<?php

Route::get('/', 'BasicController@check');
Route::get('/login',function(){
  return view('admin.login');
});
Route::get('/dashboard', function(){
  return view('admin.home');
});
Route::get('/schedules',function(){
  return view('admin.schedule');
});
Route::get('/register', function(){
  return view('admin.register');
});
Route::post('/signin', 'BasicController@signIn');
Route::post('/store','BasicController@store');
Route::get('/logout', function(){
  auth()->logout();
  return redirect('/');
});
Route::get('/subject','SubjectController@show');
Route::get('/time','TimeController@showTime');
Route::get('/rooms','RoomController@show');
Route::get('/section','SectionController@show');
Route::get('/teachers','TeachersController@show');
