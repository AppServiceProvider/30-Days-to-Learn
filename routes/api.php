<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PhotoController;

// GET|HEAD        api/photos ......................................................... photos.index › PhotoController@index
//   POST            api/photos ......................................................... photos.store › PhotoController@store
//   GET|HEAD        api/photos/{photo} ................................................... photos.show › PhotoController@show
//   PUT|PATCH       api/photos/{photo} ............................................... photos.update › PhotoController@update
//   DELETE          api/photos/{photo} ............................................. photos.destroy › PhotoController@destroy


// Define API resource routes for photos
Route::apiResource('photos', PhotoController::class);