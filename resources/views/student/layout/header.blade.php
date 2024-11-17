

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="stylesheet" href="nav.css">
</head>
<body>
    <div class="main">
        <div class="nav">
            <h2 href="{{url('/')}}">SAMS</h2>
            <div class="nav-part2">
                <h4 href="{{route('website.welcome')}}">Home</h4>
                <h4  href="{{route('student.signup')}}">Registration</h4>
                <h4  href="{{route('student.signup')}}">Login</h4>
                <i class="ri-menu-3-fill"></i>
            </div>
        </div>
        <div class="content">
            <div class="left">
               
            </div>
            <div class="right">
                <!-- <img src="new.jpg" alt=""> -->
            </div>

        </div>
    </div>
</body>
</html>