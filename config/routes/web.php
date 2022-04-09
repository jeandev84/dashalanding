<?php

use Laventure\Foundation\Facade\Routing\Route;

/*
|----------------------------------------------------------------------
|     Registration all web routes
|----------------------------------------------------------------------
*/

Route::map('GET|POST', '/', 'LandingController@index', 'home');
