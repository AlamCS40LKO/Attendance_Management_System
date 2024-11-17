<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;


class Student extends Model implements Authenticatable
{

    protected $primaryKey = 'student_id';
    protected $table = 'students';
    protected $fillable = [
        'enrollment_number','registration_number','first_name','middle_name','last_name',
        'email','phone_number','dob','gender','program','admission_date','admission_type',
        'country','state','city','address','pin_code','password','verification_code'
    ];

        // Implementing the Authenticatable methods

        public function getAuthIdentifierName()
        {
            return 'student_id';
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
    
}
