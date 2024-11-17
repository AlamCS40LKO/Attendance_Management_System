<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="{{ asset('css/email/forget_password.css') }}">
    <title>Forget_Password</title>
    <style>
    
      .container{
      width: 50% !important;
      height: 50% !important;
      /* height: 5; */
    }
   
  </style>
   
  </head>
  <body>
    @include('website/include/topbar')
    <section class="container">
        <header><h1>Forget Password</h1></header>
        @include('website.include.alert')
     
        <form action="{{route('student.forget-password-submit')}}" method="post">
            @csrf
 
          <div class="input-box">
            <label for="">Email Address</label>
            <input type="email" name="email" id="" placeholder="Enter Registered Email" value="{{old('email')}}">
            {{-- <span class="text-danger">
                @error('email')
                {{$message}}
                @enderror
              </span> --}}
        </div>
        <div class="butn">
            <div class="input-box">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
    </form>
  
  </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
  </body>
</html>

