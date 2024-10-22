<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home',[
        'name'=> 'app service provider'
    ],
);
});

Route::get('/jobs', function () {
    return view('jobs',    [
        'jobs' =>[
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
            ]
    ]);
});


Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10,000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40,000'
        ]
    ];
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

