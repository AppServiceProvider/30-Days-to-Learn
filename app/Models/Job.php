<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;

class Job extends Model{
    protected $table= "job_listings";
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}