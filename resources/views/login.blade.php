<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Login Page</title>
    @include('website/include/topbar')
    <style>
    
      .container{
      width: 50% !important;
      height: 50% !important;
      /* height: 5; */
    }
   
  </style>
  </head>
  <body>
    <section class="container">
        <header><h1>Login</h1></header>
        @include('website.include.alert')
        {{-- <p>Enter the Verification Code to Verify your email</p> --}}
        <form action="{{route('login-submit')}}" method="post" class="form">
          @csrf
      
          <div class="input-box">
              <div class="gender-box">
                  <label for="role">Role</label>
                  <select id="role" name="role" required>
                      <option value="">Select User Type</option>
                      <option value="student">Student</option>
                      <option value="teacher">Teacher</option>
                      <option value="admin">Admin</option>
                  </select>
              </div>
          </div>
     
          <div class="input-box">
              <label for="">Email</label>
              <input type="email" name="email" id="" Placeholder="Enter Registered Email"> 
              <span class="text-danger">
                  @error('email')
                  {{$message}}
                  @enderror
              </span>
          </div>
      
          <div class="input-box">
              <label for="">Password</label>
              <input type="password" name="password" id="" placeholder="Enter Password">
              <span class="text-danger">
                  @error('password')
                  {{$message}}
                  @enderror
              </span>
          </div>
            
          <div class="input-box">
              <button class="btn btn-primary" type="submit">Submit</button>
              <span>If you don't remember your password</span> <a href="{{route('student.forget-password')}}">Forget Password</a>
          </div>
      </form>
      
    </section>
    {{-- @include('website/include/footer') --}}

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
  </body>
</html>

