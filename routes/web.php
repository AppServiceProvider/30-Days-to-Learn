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
    $job = Arr::first(Job::all(), function($job) use ($id) {
        return $job['id'] == $id;
    });
    
    if (!$job) {
        abort(404, 'Job not found');
    }
    return view('job', ['job' => $job]);
});

Route::get('/contract', function () {
    return view('contract');
});

