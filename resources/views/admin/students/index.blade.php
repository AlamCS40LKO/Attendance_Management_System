
{{-- @extends(layout.app) --}}

@section('content')

   <table class="table">
  <thead>
    <tr>
      <th scope="col">S NO.</th>
      <th scope="col">Enroll_number</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Program</th>
     
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
 
    @foreach($students as $student) 
    <tr>
      <th scope="row">{{$loop->iteration}}</th>
      <td>{{$student->enrollment_number}}</td>
      <td>{{$student->first_name}} {{$student->last_name}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->phone_number}}</td>
      <td>{{$student->program}}</td>
   
      <td>
      {{-- <a href="{{route('admin.students.show')}}/{{$student->student_id}}"> --}}
        <a href="{{ route('admin.students.show', ['student_id' => $student->student_id]) }}">
      <button class="btn btn-sm btn-primary">Detail</button>
      </a>
      </td>
      <td>
      {{-- <a href="{{ route('admin.students', ['student_id' => $student->student_id]) }}"> --}}
      <button class="btn btn-sm btn-success">Edit</button>
      </a>
      </td>

      <td>
        <a href="{{url('/edit')}}/{{$student->id}}">
        <button class="btn btn-sm btn-success">Delete</button>
        </a>
        </td>
    </tr>

    @endforeach
    
  </tbody>
</table>

@endsection

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
                  
                    @yield('content');
                 
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



