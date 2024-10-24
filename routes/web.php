<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

    $jobs =[
            [
                'id' => 1,
                'title'=> 'Director',
                'salary'=> '500000'
            ],
            [
                'id' => 2,
                'title'=> 'CEO',
                'salary'=> '100000'
            ],
            [
                'id' => 3,
                'title'=> 'staff',
                'salary'=> '10000'
            ]
           ];
        

Route::get('/', function () {
    return view('home',[
        'name'=> 'app service provider'
    ],
);
});

Route::get('/jobs', function () use($jobs){
    return view('jobs',['jobs'=> $jobs]);
});


Route::get('/jobs/{id}', function ($id) use($jobs){
    // $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    $job = Arr::first($jobs, function($job) use ($id) {
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

