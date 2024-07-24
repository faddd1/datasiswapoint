<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function(){

    return view('pages.dashboard');

});

Route::get('/profile', function(){

    return view('pages.profile');

});

Route::get('/datasiswa', function(){

    return view('pages.table_data');

});

Route::get('/laporsiswa', function(){
    
    return view('pages.report');
});

Route::get('/login', function(){

    return view('login.sig_in');

});




