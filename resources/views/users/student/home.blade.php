@extends('users.student.cover')
@section('content')

    <style>
      #content_id_card:hover{
        cursor:pointer;
        color:violet;
      }

      #content_id_card{
        box-shadow:0px 8px 16px 0px rgba(0,0,0,0.2)
      }
    </style>

        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome <span style="font-size:30px;font-style:san-serif" class="text-primary">{{ Auth::guard('user')->user()->firstname}} {{ Auth::guard('user')->user()->lastname}}</span></h3>
                </div>
              </div>
            </div>
          </div>
          
              <div class="row">
                <div class="col-md-4 mb-4 stretch-card transparent">
                  <div class="card" style="background-color:green;color:white;">
                    <div class="card-body" onclick="window.location.href='{{ route('get_content') }}'">
                      <p class="mb-4">Contents categories</p>
                      <p class="fs-30 mb-2">3</p>
                    </div>
                  </div>
                </div>
                 
                <div class="col-md-4 mb-4 stretch-card transparent">
                  <div class="card" style="background-color:darkblue;color:white;">
                    <div class="card-body">
                      <p class="mb-4">All courses</p>
                      <p class="fs-30 mb-2">{{ $Course_numbers }}</p>
                      <!-- <p>22.00% (30 days)</p> -->
                    </div>
                  </div>
                </div>

                <div class="col-md-4 mb-4 stretch-card transparent">
                  <div class="card" style="background-color:black;color:white;">
                    <div class="card-body">
                      <p class="mb-4">Test/Exams</p>
                      <p class="fs-30 mb-2">{{ $Exam_numbers }}</p>
                      <!-- <p>22.00% (30 days)</p> -->
                    </div>
                  </div>
                </div>
              
              </div>
              <br>
              <div class="row">
                
                <div class="col-md-4 stretch-card transparent">
                  <div class="card" style="background-color:orange;color:white;">
                    <div class="card-body">
                      <p class="mb-4" style="color:black">Taken courses</p>
                      <p class="fs-30 mb-2">{{ $User_take_Course }}</p>
                      <!-- <p>0.22% (30 days)</p> -->
                    </div>
                  </div>
                </div>
              
                <div class="col-md-4 mb-4 mb-lg-0 stretch-card transparent">
                  <div class="card" style="background-color:skyblue;color:white;">
                    <div class="card-body">
                      <p class="mb-4">Done exams</p>
                      <p class="fs-30 mb-2">{{ $Done_exams }}</p>
                      <!-- <p>2.00% (30 days)</p> -->
                    </div>
                  </div>
                </div>
                
                <div class="col-md-4 stretch-card transparent">
                  <div class="card" style="background-color:teal;color:white;">
                    <div class="card-body">
                      <p class="mb-4">All certificates</p>
                      <p class="fs-30 mb-2">{{ $Certificate_numbers }}</p>
                      <!-- <p>0.22% (30 days)</p> -->
                    </div>
                  </div>
                </div>

              </div>

              <br>

              <div class="row">
                <div class="col-3 col-xl-3 mb-4 mb-xl-0"></div>
                <div class="col-6 col-xl-6 mb-4 mb-xl-0">
                  <div class="card" id="content_id_card">
                    <div class="card-body" onclick="window.location.href='{{route('get_content')}}'">
                      Choose your preferred method of learning or mix and match to suit your style. At <b>RdaiS(Rwanda inclusive system)</b>, we make education accessible, flexible, and effective for everyone. Start your learning journey today!
                    </div>
                  </div>
                </div>
                <div class="col-3 col-xl-3 mb-4 mb-xl-0"></div>
            </div>

@endsection