<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\student;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('student/Student_registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $students=student::all();
        return p($students);
        // die();

        {
            $validator = Validator::make($request->all(), [
                'first_name' => ['required'],
                'email' => ['required', 'email', 'unique:students,email'],
                'password' => ['required'],
                // Add other validation rules as needed
            ]);
    
            if ($validator->fails()) {
                return response()->json($validator->messages(), 400);
            }
    
            try {
                DB::beginTransaction();
    
                $student = Student::create([
                    'enrollment_number' => $request->enrollment_number,
                    'registration_number' => $request->registration_number,
                    'first_name' => $request->first_name,
                    'middle_name' => $request->middle_name,
                    'last_name' => $request->last_name,
                    'email' => $request->email,
                    'phone_number' => $request->phone_number,
                    'dob' => $request->dob,
                    'gender' => $request->gender,
                    'program' => $request->program,
                    'admission_date' => $request->admission_date,
                    'admission_type' => $request->admission_type,
                    'country' => $request->country,
                    'state' => $request->state,
                    'city' => $request->city,
                    'address' => $request->address,
                    'pin_code' => $request->pin_code,
                    'password' => bcrypt($request->password), // Hash the password
                ]);
                $student->save();
                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json(['error' => $e->getMessage()], 500);
            }
    
            return response()->json(['message' => 'User registered successfully'], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
