
  {{-- @include('website.yout/header') --}}
  @include('website/include/topbar')
  <body>
    <b><h1 class="text-center">Student Attendance Management System  </h1></b>
    <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Course Card</title>
<style>
  /* Card styles */
  .card {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    background-color: #fff;
    max-width: 300px;
    margin: 20px auto;
  }

  .card h2 {
    margin-bottom: 10px;
  }
</style>
</head>
<body>

<div class="card">
  <label for="">Program</label>
  <h2>Bacholer Of Computer Science</h2>
  <p>Duration: 4 Years</p>
  <p>fee: 2000/semester</p>
  <p>Description: This course covers the basics of HTML.</p>
</div>


<div class="card">
  <label for="">Program</label>
  <h2>Bacholer Of Computer Science</h2>
  <p>Duration: 4 Years</p>
  <p>fee: 2000/semester</p>
  <p>Description: This course covers the basics of HTML.</p>
</div>


<div class="card">
  <label for="">Program</label>
  <h2>Bacholer Of Computer Science</h2>
  <p>Duration: 4 Years</p>
  <p>fee: 2000/semester</p>
  <p>Description: This course covers the basics of HTML.</p>
</div>


</body>
</html>

    @include('website/include/footer')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    {{-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> --}}
  </body>
</html>