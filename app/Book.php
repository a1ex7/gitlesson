<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function users(){
        // [bad] develop-feature1
    }
}
