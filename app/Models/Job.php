<?php

namespace App\Models;

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
}