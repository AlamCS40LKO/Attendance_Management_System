<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        
        'name',
     
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function student()
    {
        return $this->hasOne(Student::class);
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class);
    }

    public function admin()
    {
        return $this->hasOne(Admin::class);
    }
}

class Student extends Authenticatable
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

class Teacher extends Authenticatable
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

class Admin extends Authenticatable
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
