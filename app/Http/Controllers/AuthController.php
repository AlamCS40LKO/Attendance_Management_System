<?php

namespace App\Http\Controllers;

use App\Rules\StrongPasswordRule;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Middleware\StudentMiddleware;
use Illuminate\Auth\SessionGuard;

class AuthController extends Controller
{
    private $entryDate;
    public function signup()
    {
        return view('student.signup');
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'phone_number' => ['required', 'min:10', 'max:10'],
            'dob'=>['required'],
            'gender'=>['required'],
            'password' => ['required', 'string', 'min:8', new StrongPasswordRule],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $student = new Student;

            $student->fill($request->only([
                'enrollment_number', 'registration_number','first_name', 'last_name', 'email', 'phone_number', 'dob', 'gender','program', 'admission_date', 'admission_type',
                'country', 'state','city', 'address', 'pin_code', 'password','verification_code',
            ]));

            $student->password = bcrypt($request->password);

            $code = substr(str_shuffle('123456789'), 0, 4);
            $student->verification_code = $code;
            $student->save();
    
                $param = [
                    'name' => $student->first_name,
                    'code' => $code,
                    'email' => $student->email,
                ];

                try {
                    // Send Email
                    Mail::send('email.signup', $param, function ($message) use ($param) {
                        $message->to($param['email']);
                        $message->subject('Email Verification');
                    });
                    $student->verification_code = $code;
                    // No exceptions were thrown, email sent successfully
                    Log::info('Email sent successfully.');
                    Session::put('student_id', $student->student_id);

                    if ($student->email_verified_at) {
                        return redirect()->route('student.email-verification')
                                         ->with('status','You are already verified.');
                    }

                    // Redirect to email verification page
                    return redirect()->route('student.email-verification')
                                    ->with('status', 'Registration successful. Please check your email for the verification code.');

                } catch (\Exception $e) {
                    // Log the exception
                    Log::error('Email sending failed: ' . $e->getMessage());

                    // Handle the failure as needed
                    $msg = "Email sending failed. Please try again later.";
                    return redirect()->back()->withErrors([$msg])->withInput();
                }

        } catch (\Exception $e) {
            Log::error('Exception: ' . $e->getMessage());
            $msg = "An error occurred. Please try again later.";
            return redirect()->back()->withErrors([$msg])->withInput();
        }
    }

    public function emailVerification()
    {
        if (session()->has('student_id')) {
        //     $student = Student::find(session('student_id'));
            // return redirect()->route('student.email-verification');
            return view('student.email-verification');
        }elseif(session()->has('teacher_id')){
            return "hello";
        }else{
            return redirect()->back()->withError("firstly Registered Yourself");
        }
       
    }
    
    public function resendemailVerificationSubmit(Request $request)
{
    try {
        // Check if the user is authenticated and has a valid session
        if (session()->has('student_id')) {
            // Fetch the student record based on the session data
            $student = Student::find(session('student_id'));
            
            // Check if the student record exists
            if ($student) {
                // Generate a new verification code
                $code = substr(str_shuffle('123456789'), 0, 4);

                // Update the student's verification code
                $student->verification_code = $code;
                $student->save();

                // Prepare data for email
                $param = [
                    'name' => $student->first_name,
                    'code' => $code,
                    'email' => $student->email,
                ];

                // Send the email
                Mail::send('email.resend-email-verification', $param, function ($message) use ($param) {
                    $message->to($param['email']);
                    $message->subject('Resend Email Verification Code');
                });

                // Log successful email sending
                Log::info('Email sent successfully.');

                // Redirect to the email verification page with a success message
                $msg = "Code has been send your Email. Please check";
                return redirect()->back()->with('status', $msg);
            } else {
                // Redirect back with an error message if the user is not found
                return redirect()->back()->withError("User not found.");
            }
        } else {
            // Redirect back with an error message if the session data is invalid
            return redirect()->back()->withError("Invalid session data.");
        }
    } catch (\Exception $e) {
        // Log the exception and redirect back with an error message
        Log::error('Email sending failed: ' . $e->getMessage());
        $msg = "Email sending failed. Please try again later.";
        return redirect()->back()->withErrors([$msg])->withInput();
    }
}
 
    public function emailVerificationSubmit(Request $request)
    {
        $request->validate([
            'code'=>'required',
        ]);

        try{
            $student_id=Session::get('student_id');

            $row = DB::table('students')->select('*')
            ->where(['verification_code'=>$request->code, 'student_id'=>$student_id])->first();
        
        if(!empty($row)){
            #update the email verifiaction time in user

            $data=array(
                'email_verified_at'=>now(),
                'updated_at'=>now(),
            );

            $update=student::where('student_id',$student_id)->update($data);

            if(!empty($update)){
                $request->session()->forget('student_id');

                return redirect()->route('login')->withStatus("Verification Successfull, You can login Now");

            }else {
                return redirect()->back()->withError("Something went wrong, Please try again");
            }
        }else {
            return redirect()->back()->withError("Invalid Verification Code");
        }
    }catch(Exception $e){
        return redirect()->back()->withError($e->getMessage());
    }
}

public function forgetPassword()
{

        return view('student.forget-password');
 
}
public function forgetPasswordSubmit(Request $request)
{
    $request->validate([
        'email' => 'required|email',
    ]);

    try {
        $student = Student::where('email', $request->email)->first();
        $teacher = Teacher::where('email', $request->email)->first();

        if ($student) {
            $code = substr(str_shuffle('123456789'), 0, 4);    
            $param = [
                'name' => $student->first_name,
                'code' => $code,
                'email' => $student->email,
            ];

            // Send student email
            $this->sendPasswordResetEmail($param);

            // Save verification code to student record
            $student->verification_code = $code;
            $student->save();

            // Log success and set session
            Log::info('Email sent successfully.');
            Session::put('student_id', $student->student_id);

            // Redirect to student reset password page with success message
            $msg = "Reset password code has been sent to your email";
            return redirect()->route('student.reset-password')->withStatus($msg);
        } elseif ($teacher) {
            $code = substr(str_shuffle('123456789'), 0, 4);
            $param = [
                'name' => $teacher->name,
                'code' => $code,
                'email' => $teacher->email,
            ];

            // Send teacher email
            $this->sendPasswordResetEmail($param);

            // Save verification code to teacher record
            $teacher->verification_code = $code;
            $teacher->save();

            // Log success and set session
            Log::info('Email sent successfully.');
            Session::put('teacher_id', $teacher->id);

            // Redirect to teacher reset password page with success message
            $msg = "Reset password code has been sent to your email";
            return redirect()->route('student.reset-password')->withStatus($msg);
        } else {
            return redirect()->back()->withError("User not found with this email");
        }
    } catch (\Exception $e) {
        // Log the exception
        Log::error('Email sending failed: ' . $e->getMessage());

        // Handle the failure as needed
        $msg = "Email sending failed. Please try again later.";
        return redirect()->back()->withErrors([$msg])->withInput();
    }
}

private function sendPasswordResetEmail($param)
{
    try {
        Mail::send('email.signup', $param, function ($message) use ($param) {
            $message->to($param['email']);
            $message->subject('Password Reset Email Verification');
        });
    } catch (\Exception $e) {
        // Log email sending failure
        Log::error('Email sending failed: ' . $e->getMessage());
        // Handle the failure as needed
        $msg = "Email sending failed. Please try again later.";
        return redirect()->back()->withErrors([$msg])->withInput();
    }
}
public function resetpassword()
{
 
    return view('student.reset-password');
   
}

public function resetpasswordSubmit(Request $request)
{
 
    $request->validate([
        'code'=>'required',
        'password'=>'min:6|required_with:confirm_password|same:confirm_password',
    ]);

    try{
        $student_id=Session::get('student_id');
        $teacher_id=Session::get('teacher_id');


        $row = DB::table('students')->select('*')
        ->where(['verification_code'=>$request->code, 'student_id'=>$student_id])->get();
    
    if(!empty($row)){
        #update the email verifiaction time in user

        $data=array(
            'password'=>bcrypt($request->password),
            'updated_at'=>$this->entryDate,
        );

        $update=student::where('student_id',$student_id)->update($data);

        if(!empty($update)){
       
            $request->session()->forget('student_id');

            return redirect()->route('login')->withStatus("Password reset Successfully");

        }else {
            return redirect()->back()->withError("Something went wrong, Please try again");
        }
    }else {
        return redirect()->back()->withError("Invalid Verification Code");
    }
}catch(Exception $e){
    return redirect()->back()->withError($e->getMessage());
}
   
}
}