<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    $username='bob';
    return view('hello')->with('username', $username );
});//the first section is the url followed by function
//if we place the view after the return ;THE VIEW GOES TO RESOURSES AND GETS THE PAGE FROM VIEWS
Route::get('/features',function(){
return view('features');
});
Route::get('/pricing',function(){
    $clients=['Jake','Ikye','Jane','Mary'];
    return view('prices')->with('clients', $clients);
    });

