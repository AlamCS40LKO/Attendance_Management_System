<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Teacher;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminDashboard()
{
    $students = Student::all();
    $teachers = Teacher::all();

    return view('admin.dashboard', compact('students', 'teachers'));
}

}
