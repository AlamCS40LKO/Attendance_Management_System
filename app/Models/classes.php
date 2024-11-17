<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    use HasFactory;
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);  //(inverse of one-to-many)
    }

    public function papers()
    {
        return $this->hasMany(Paper::class);
    }
}
