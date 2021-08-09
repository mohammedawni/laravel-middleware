<?php

//Note:By default All admin routes have a prefix of /admin 
//Note:By default All admin routes have a middlware of admin 
use Illuminate\Support\Facades\Route;

Route::view('/', 'admin')->name('admin');