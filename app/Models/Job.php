<?php

namespace App\Models;
use Illuminate\Support\Arr;

class Job{
    static function all(): array{
       return [
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
   }

   static function find($id){
    $job = Arr::first(static::all(), function($job) use ($id) {
        return $job['id'] == $id;
    });
    
    if (!$job) {
        abort(404);
    }
    return $job;
   }

}