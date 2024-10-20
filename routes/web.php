<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome',[
        'name'=> 'app service provider'
    ]);
});

Route::get('/about', function () {
    return view('about',[
        'jobs' =>[
                [
                    'title'=> 'Director',
                    'salary'=> '500000'
                ],
                [
                    'title'=> 'CEO',
                    'salary'=> '100000'
                ],
                [
                    'title'=> 'staff',
                    'salary'=> '10000'
                ]
            ]
    ]
    
   );
});
Route::get('/contract', function () {
    return view('contract');
});

