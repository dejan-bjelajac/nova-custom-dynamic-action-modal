<?php

use Illuminate\Support\Facades\Route;

Route::get('/actions/{resource}/dynamic-fields', '\NovaDynamicModal\DynamicFieldsController@show');
