<?php

use App\Models\Employer;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Arr;
use App\Models\Job;
use App\Models\JobListing;
use Illuminate\Http\Request;


Route::get('employers/create', function () {
    return view('create');
})->name('employers.index');


// Define the POST route for storing a new employer
Route::post('/employers', function (Request $request) {
    // Create the employer
    Employer::create([
        'name' => $request->input('name'),
    ]);
    return redirect()->back();
})->name('employers.store');








// routes/web.php
Route::delete('/employers/{id}', function ($id) {
    Employer::findOrFail($id)->delete();
    return redirect()->back()->with('success', 'Employer deleted successfully');
})->name('employers.destroy');





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
    $jobListings= JobListing::with('employer')->simplePaginate(20);

    return view('jobListing',['jobListings'=> $jobListings]);

});



Route::get('/jobListing/{id}', function ($id) {
    $emp = Employer::find($id);
    if (!$emp) {
        return response('Employer not found', 404);
    }
    return view('employer', ['emp' => $emp]);
});



// Display all employers or a single employer
Route::get('/employers/{id?}', function($id = null) {
    if ($id) {
        $employer = Employer::find($id);
        return view('employers', ['employer' => $employer]);
    } else {
        $employers = Employer::all();
        return view('employers', ['employers' => $employers]);
    }
});





Route::post('/employers/{id}/update', function(Request $request, $id) {

        // Find the employer by id and update their name
        $employer = Employer::findOrFail($id);
        $employer->name = $request->input('name');
        $employer->save();
        // return redirect()->route('employers.employers', $id)->with('status', 'Employer details updated successfully!');

           // Redirect back to the employer's details page or to the employers list with a success message
           return redirect()->back();
});

