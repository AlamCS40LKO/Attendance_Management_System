<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Teacher extends Model implements Authenticatable
{
    use HasFactory;

    protected $primaryKey = 'teacher_id';
    protected $table = 'teachers';

    protected $fillable = [
        'name',
        'email',
        'password',
        // Add other fillable attributes as needed
    ];

    public function getAuthIdentifierName()
    {
        return 'teacher_id'; // Assuming 'teacher_id' is the correct unique identifier column name
    }
    

    public function getAuthIdentifier()
    {
        return $this->getKey();
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }

    // Relations
    public function classes()
    {
        return $this->hasMany(Classes::class);
    }
}
