<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;

    public function class()
    {
        return $this->belongsTo(Classess::class);  //(inverse of one-to-many)
    }

}

