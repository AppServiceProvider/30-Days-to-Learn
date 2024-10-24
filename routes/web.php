<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;
        

Route::get('/', function () {
    return view('home',[
        'name'=> 'app service provider'
    ],
);
});

Route::get('/jobs', function () {
    return view('jobs',['jobs'=> Job::all()]);
});


Route::get('/jobs/{id}', function ($id){
    // $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    $job= Job::find($id);
    return view('job', ['job' => $job]);
});

Route::get('/contract', function () {
    return view('contract');
});

