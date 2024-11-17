<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset('css/email/reset_password.css') }}">
    <title>Reset Password</title>
    <style>
    
      .container{
      width: 50% !important;
      height: 50% !important;
    }
   
  </style>
    
  </head>
  <body>
    @include('website.include.topbar')
    <section class="container">
        <header><h1>Reset Password</h1></header>
        <form action="{{route('student.reset-password-submit')}}" method="post">
          @include('website.include.alert')
            @csrf
      
          <div class="input-box">
            <label for="">Verification Code</label>
            <input type="number" name="code" id="" placeholder="Enter Verification Code" value= {{old('code')}}>
            <span class="text-danger">
                @error('code')
                {{$message}}
                @enderror
              </span>
        </div>
        <div class="input-box">
  
              <label for="">Password</label>
              <input type="password" name="password" id="" placeholder="Enter New Password">
          </div>

          <div class="input-box">
              <label for="">Confirm Password</label>
              <input type="password" name="confirm_password" id="" placeholder="Enter Confirm Password">
          </div>
   
            <div class="input-box" id="butn">
                <button class="btn" type="submit">Submit</button>
              </form>
                <form action="{{ route('student.resend-email-verification-submit') }}" method="POST">
                  @csrf
                      <button class="btn" type="submit">Resend</button>
            </div>
    </form>
 
        
    
    </section>

  </body>
</html>

