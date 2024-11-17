<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/student/registrationform.css') }}">
    <title>{{config('app.name')}}</title>
    <style>
    .container{
        width: 70% !important;
        height: 100% !important;
        margin-top: 25px;
      }
    </style>
  </head>
  <body>
<nav>
    @include('website/include/topbar')
</nav>
    <section class="container">
     
        <form action="{{ route('register') }}" method="POST" class="form">
            <header><h1>Registration Page</h1></header>
            @csrf

            @include('website.include.alert')
        <div class="column">
            <div class="input-box">
                <label for="">Enrollment Number <span>*</span></label>
                <input type="text" name="enrollment_number" id="" Placeholder="Enter Enrollment Number" value="{{old('enrollment_number')}}"> 
            </div>
            <div class="input-box">
                <label for="">Registraion Number <span>*</span></label>
                <input type="text" name="registration_number" id="" Placeholder="Enter Registration Number" value="{{old('registration_number')}}"> 
            </div>
            </div>

            <div class="column">
            <div class="input-box">
                <label for="">First Name <span>*</span></label>
                <input type="text" name="first_name" id="" placeholder="Enter First Name" value="{{old('first_name')}}">
                {{-- <span class="text-danger">
                    @error('first_name')
                    {{$message}}
                    @enderror
                  </span> --}}
            </div>
            <div class="input-box">
                <label for="">Middle Name</label>
                <input type="text" name="middle_name" id="" placeholder="Enter MIddle Name" value="{{old('middle_name')}}">
          
            </div>
            <div class="input-box">
                <label for="">Last Name <span>*</span></label>
                <input type="text" name="last_name" id="" placeholder="Enter Last Name" value="{{old('last_name')}}">
            </div>
            </div>

            <div class="column">
            <div class="input-box">
                <label for="">Email Address <span>*</span></label>
                <input type="email" name="email" id="" placeholder="Enter Email id" value="{{old('email')}}">
            </div>
            <div class="input-box">
                <label for="">Phone Number <span>*</span></label>
                <input type="number" name="phone_number" id="" placeholder="Enter Phone Number" value="{{old('phone_number')}}">

            </div>
            </div>

            <div class="column">
            <div class="input-box">
                <label for="">Date of Birth <span>*</span></label>
                <input type="date" name="dob" id="" placeholder="Enter Date of birth" value="{{old('dob')}}">
            </div>
            <div class="input-box">
            <div class="gender-box">
                <label for="gender">Gender <span>*</span></label>
                <select id="gender" name="gender">
                    <option value="">Select Gender</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                </select>                
            </div>
            </div>
            </div>
            
            <div class="column">
            <div class="input-box">
            <div class="gender-box">
                <label for="program">Program <span>*</span></label>
                <select id="program" name="program">
                    <option value="">Select Program</option>
                    <option value="BCA" {{ old('program') == 'BCA' ? 'selected' : '' }}>BCA</option>
                    <option value="MCA" {{ old('program') == 'MCA' ? 'selected' : '' }}>MCA</option>
                </select>                
            </div>
            </div>
            <div class="input-box">
                <label for="">Admission Date <span>*</span></label>
                <input type="date" name="admission_date" id="" value="{{old('admission_date')}}">
            </div>
            </div>

            <div class="column">
            <div class="input-box">
            <div class="gender-box">
                <label for="gender">Admission Type </label>
                <select id="gender" name="admission_type">
                    <option value="">Select Admission Type</option>
                    <option value="Regular" {{ old('admission_type') == 'Regular' ? 'selected' : '' }}>Regular</option>
                    <option value="Self_finance" {{ old('admission_type') == 'Self_finance' ? 'selected' : '' }}>Self Finance</option>
                </select>
            </div>
            </div>
            <div class="input-box">
                <label for="">Country</label>
                <input type="text" name="country" id="" placeholder="Enter Country Name" value="{{old('country')}}">
            </div>
            </div>

            <div class="column">
            <div class="input-box">
                <label for="">State</label>
                <input type="text" name="state" id="" placeholder="Enter State Name" value="{{old('state')}}">
                <span class="text-danger">
                    @error('state')
                    {{$message}}
                    @enderror
                  </span>
            </div>
            <div class="input-box">
                <label for="">City</label>
                <input type="text" name="city" id="" placeholder="Enter City Name" value="{{old('city')}}">
            </div>
            </div>

            <div class="column">
            <div class="input-box">
                <label for="">Address</label>
                <input type="text" name="address" id="" placeholder="Enter Address Name" value="{{old('address')}}">
            </div>

            </div>
            <div class="column">
            <div class="input-box">
                <label for="">Pin Code</label>
                <input type="number" name="pin_code" id="" placeholder="Enter Pin Code" value="{{old('pin_code')}}">
            </div>
            <div class="input-box">
                <label for="">Password <span>*</span></label>
                <input type="password" name="password" id="" placeholder="Enter Strong Password">
            </div>
            </div>
            <div class="input-box">
            <button class="btn btn-primary" type="submit">Submit</button>
            <a href="{{ route('student.signup') }}" class="btn btn-primary">Reset</a>

           <span>Already Registred</span> <a href="{{route('login')}}">Login</a>
            </div>
        
        </form>
    </section>
    {{-- @include('website/include/footer') --}}
  </body>
</html>


         