<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    {{-- <link rel="stylesheet" href="{{ asset('css/registrationform.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/student/registrationform.css') }}">
    <title>Vefication Email</title>
    <style>
    
      .container{
      width: 50% !important;
      height: 50% !important;
      /* height: 5; */
      margin-top: 5%;
    }
    .butn{
      display: flex;
      margin-top: 2rem;
    }
    .btn{
      margin: 5px;
    }
    .input-box{
      margin-top: 15px;
    }
   
  </style>
   
  </head>
  <body>
    @include('website/include/topbar')
    <section class="container">
        <header><h1>Verification Code</h1></header>
        @include('website.include.alert')
      
        {{-- <h3>Enter the Verification Code to Verify your email</h3> --}}
        <form action="{{route('student.email-verification-submit')}}" method="post">
            @csrf
            <div class="input-box">
                <label for="">Verification Code</label>
                <input type="text" name="code" id="" Placeholder="Enter verification Code"> 
                <span class="text-danger">
                  @error('code')
                  {{$message}}
                  @enderror
                </span>
            </div>
            <div class="butn">
            <div class="input-box">
                <button class="btn new btn-primary" type="submit">Submit</button>             
            </div>
    </form>
      <!-- Resend form -->
      <form action="{{ route('student.resend-email-verification-submit') }}" method="POST">
        @csrf
        <div class="input-box">
            <button class="btn btn-primary" type="submit">Resend</button>
        </div>
        </div>
    </form>
    </section>

  </body>
</html>

