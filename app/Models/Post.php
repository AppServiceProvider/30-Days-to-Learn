<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    public function tags(){
        return $this->belongsToMany(Tag::class, 'post_tag', foreignPivotKey: 'post_id', relatedPivotKey: 'tag_id');
    }
}
