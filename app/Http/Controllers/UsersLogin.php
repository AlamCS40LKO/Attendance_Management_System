<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\StudentMiddleware;
use App\Http\Middleware\TeacherMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

// for debug
use Illuminate\Support\Facades\Log;


class UsersLogin extends Controller
{
#login  
public function login()
{
    if (Auth::guard('student')->check()) {
        return redirect()->route('student.dashboard');
    } elseif (Auth::guard('teacher')->check()) {
        return redirect()->route('teacher.dashboard');
    } elseif (Auth::guard('admin')->check()) {
        return redirect()->route('admin.dashboard');
    } else {
        return view('login');
    }
}
public function loginSubmit(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
        'role' => 'required|in:student,teacher,admin',
    ]);

    $credentials = $request->only('email', 'password');
    $role = $request->input('role');

    // Perform login based on the role
    switch ($role) {
        case 'student':
            if (Auth::guard('student')->attempt($credentials)) {
                return redirect()->route('student.dashboard');
            }
            break;
            
        case 'teacher':
            if (Auth::guard('teacher')->attempt($credentials)) {
                return redirect()->route('teacher.dashboard');
            }
            break;

        case 'admin':
            if (Auth::guard('admin')->attempt($credentials)) {
                return redirect()->route('admin.dashboard');
            }
            break;

        default:
            return redirect()->route('login')->with('error', 'Invalid role.');
    }

    return redirect()->route('login')->with('error', 'Invalid credentials or role.');

}

public function dashboard()
{
    // Get the authenticated user using the Auth facade
    $user = Auth::user();

    // Check if the user is logged in and their type
    if ($user) {
        if ($user instanceof Student) {
            // User is a Student
            return view('student.dashboard', ['user' => $user]);
        } elseif ($user instanceof Teacher) {
            // User is a Teacher
            return view('teacher.dashboard', ['user' => $user]);
        } elseif ($user instanceof Admin) {
            // User is an Admin
            return view('admin.dashboard', ['user' => $user]);
        } else {
            // Handle other user types or scenarios
            return redirect()->route('login')->with('error', 'Invalid user type.');
        }
    } else {
        // Handle the case where the user is not authenticated
        return redirect()->route('login')->with('error', 'User not logged in.');
    }
}


public function logout(Request $request)
{
    if (Auth::guard('student')->check()) {
        Auth::guard('student')->logout();
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token
        return redirect()->route('login');
    } elseif (Auth::guard('teacher')->check()) {
        Auth::guard('teacher')->logout();
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token
        return redirect()->route('login');
    } elseif (Auth::guard('admin')->check()) {
        Auth::guard('admin')->logout();
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect()->route('login');
    }

    return redirect()->route('login');
}

}
