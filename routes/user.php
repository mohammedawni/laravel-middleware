<?php

//Note:By default All user routes have a prefix of /user 
//Note:By default All user routes have a middlware of user 
use Illuminate\Support\Facades\Route;

Route::view('/', 'user')->name('user');