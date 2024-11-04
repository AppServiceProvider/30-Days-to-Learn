<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobListing extends Model
{
    use HasFactory;
    protected $table= "job_listings";

    public function employer(){
        return $this->belongsTo(Employer::class);
    }

}
