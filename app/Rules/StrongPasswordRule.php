<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class StrongPasswordRule implements Rule
{
   
    public function passes($attribute, $value)
    {
        // Define your strong password criteria here
        $uppercase = preg_match('@[A-Z]@', $value);
        $lowercase = preg_match('@[a-z]@', $value);
        $number = preg_match('@[0-9]@', $value);
        $specialChars = preg_match('@[^\w]@', $value);

        return $uppercase && $lowercase && $number && $specialChars && strlen($value) >= 8;
    }
    public function message()
    {
        return 'The :attribute must be at least 8 characters long and contain at least one uppercase letter, one lowercase letter, one number, and one special character.';
    }
}
