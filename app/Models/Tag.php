<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable= ['name'];
    // public function jobs(){
    //     return $this->belongsToMany(Job::class, relatedPivotKey: 'job_listing_id');
    // }
    public function jobs(){
        return $this->belongsToMany(Job::class, 'job_tag', 'tag_id', 'job_listing_id');
    }

    public function posts(){
        return $this->belongsToMany(Post::class, 'post_tag', 'tag_id', 'post_id');
    }

}

