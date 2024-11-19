<?php

use App\Models\Employer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\{Job,Post};
use App\Models\JobListing;
use Illuminate\Http\Request;
use App\Http\Controllers\PhotoController;

// ============================== image
// GET|HEAD        photos ...................................................... photos.index › PhotoController@index
//   POST            photos ...................................................... photos.store › PhotoController@store
//   GET|HEAD        photos/create ............................................. photos.create › PhotoController@create
//   GET|HEAD        photos/{photo} ................................................ photos.show › PhotoController@show
//   PUT|PATCH       photos/{photo} ............................................ photos.update › PhotoController@update
//   DELETE          photos/{photo} .......................................... photos.destroy › PhotoController@destroy
//   GET|HEAD        photos/{photo}/edit ........................................... photos.edit › PhotoController@edit
// ====================================
Route::resource('photos', PhotoController::class);
 