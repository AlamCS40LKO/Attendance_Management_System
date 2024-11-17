<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semster extends Model
{
    use HasFactory;

    public function papers(){
        return this->hasMany(Paper::class);
    }
}
