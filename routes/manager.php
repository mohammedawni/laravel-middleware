<?php

//Note:By default All manager routes have a prefix of /manager 
//Note:By default All manager routes have a middlware of manager 
use Illuminate\Support\Facades\Route;

Route::view('/', 'manager')->name('manager');