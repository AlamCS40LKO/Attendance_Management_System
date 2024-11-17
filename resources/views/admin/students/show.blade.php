
<!DOCTYPE html>
<html lang="en" data-topbar-color="dark">

    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- ========== Menu ========== -->
          @include('admin/include/leftsidebar')
            <!-- ========== Left menu End ========== -->

            <div class="content-page">

               @include('admin/include/topbar')

                <div class="content">
                  
                    {{-- @yield('content'); --}}
                   


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        .profile-info {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 10px;
            margin-top: 20px;
        }
        .profile-info label {
            font-weight: bold;
        }
        .profile-info span {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
  <div class="container">
    <h1>{{$student->first_name}} {{$student->last_name}} Profile</h1>
    <form action="{{route('admin.students.update', ['student_id' => $student->student_id])}}" method="POST">
        @csrf
        <div class="profile-info">
            <label for="enrollment-number">Enrollment Number:</label>
            <input type="text" id="enrollment-number" name="enrollment_number" value="{{$student->enrollment_number}}">

            <label for="registration-number">Registration Number:</label>
            <input type="text" id="registration-number" name="registration_number" value="{{$student->registration_number}}">

            <label for="first-name">First Name:</label>
            <input type="text" id="first-name" name="first_name" value="{{$student->first_name}}">

            <label for="last-name">Last Name:</label>
            <input type="text" id="last-name" name="last_name" value="{{$student->last_name}}">

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{$student->email}}">

            <label for="phone-number">Phone Number:</label>
            <input type="text" id="phone-number" name="phone_number" value="{{$student->phone_number}}">

            <label for="dob">Date Of Birth:</label>
            <input type="date" id="dob" name="dob" value="{{$student->dob}}">

            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" value="{{$student->gender}}">

            <label for="program">Program:</label>
            <input type="text" id="program" name="program" value="{{$student->program}}">

            <label for="admission-date">Admission Date:</label>
            <input type="date" id="admission-date" name="admission_date" value="{{$student->admission_date}}">

            <label for="admission-type">Admission Type:</label>
            <input type="text" id="admission-type" name="admission_type" value="{{$student->admission_type}}">

            <label for="country">Country:</label>
            <input type="text" id="country" name="country" value="{{$student->country}}">

            <label for="state">State:</label>
            <input type="text" id="state" name="state" value="{{$student->state}}">

            <label for="city">City:</label>
            <input type="text" id="city" name="city" value="{{$student->city}}">

            <label for="address">Address:</label>
            <input type="text" id="address" name="address" value="{{$student->address}}">

            <label for="pin-code">Pin Code:</label>
            <input type="text" id="pin-code" name="pin_code" value="{{$student->pin_code}}">

            <a href="#">
            <button type="submit">Update Profile</button></a>
        </div>
    </form>
</div>


</body>
</html>

                 
                </div> <!-- content -->

        

             {{-- @foreach ($students as $student)
             <li>{{ $student->name }}</li>
         @endforeach --}}
            </div>
        </div>
        <!-- END wrapper -->

      {{-- @include('admin/include/rightsidebar') --}}
      {{-- @include('admin/include/footer') --}}



      <script src="{{asset('js/dashboard/vendor.min.js')}}"></script>

      <!-- App js -->
      <script src="{{asset('js/dashboard/app.min.js')}}"></script>

      <!-- Plugins js-->
      <script src="{{asset('js/dashboard/flatpickr.min.js')}}"></script>
      <script src="{{asset('js/dashboard/apexcharts.min.js')}}"></script>
      <script src="{{asset('js/dashboard/selectize.min.js')}}"></script>

      <!-- Dashboar 1 init js-->
      {{-- <script src="{{asset('js/dashboard/dashboard-1.init.js')}}"></script> --}}

    </body>
</html>
