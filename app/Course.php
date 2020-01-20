<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{   
    public function packages() 
    {
        return $this->hasMany(Package::class);
    }
}
