<?php

use App\Models\Employer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;
use App\Models\JobListing;

Route::get('/', function () {
//     return view('home',[
//         'name'=> 'app service provider'
//     ],
// );

    $jobs= Job::all();
    dd($jobs[0]->title);
});

Route::get('/jobs', function () {
    return view('jobs',['jobs'=> Job::all()]);
});


Route::get('/jobs/{id}', function ($id){
    // $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    $job= Job::find($id);

    // return view('job', ['job' => $job]);
    return view('job',['jobs'=> Job::with('employer')->get()]);

});

Route::get('/contract', function () {
    return view('contract');
});


Route::get('/jobListing', function () {

    // $jobListings= JobListing::all();
    $jobListings= JobListing::with('employer')->get();
    
    return view('jobListing',['jobListings'=> $jobListings]);

});



Route::get('/jobListing/{id}', function ($id) {
    $emp = Employer::find($id);
    if (!$emp) {
        return response('Employer not found', 404);
    }
    return view('employer', ['emp' => $emp]);
});

