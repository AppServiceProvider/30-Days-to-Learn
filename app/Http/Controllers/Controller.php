<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Employer;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

        // Show or Delete Employer        
        public function showOrDelete(Request $request, $id){
            $employer = Employer::all();
    
            if ($request->isMethod('delete')) {
                $employer->delete();
                return redirect()->route('employers.index')->with('success', 'Employer deleted successfully');
            }
    
            // If GET request, return the view with employer data
            // return view('employers.index', compact('employer'));

            return view('employers.index', ['employer'=> $employer]);

        }
}
