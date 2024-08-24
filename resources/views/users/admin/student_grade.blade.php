@extends('users.admin.cover')
@section('content')
<?php
  use App\Models\Result;
?>
        <div class="col-12 col-xl-12 mb-4 mb-xl-0">
            <h3 class="font-weight-bold" style="font-family:san-serif;">Welcome <span style="font-size:30px;font-style:san-serif" class="text-primary">{{ Auth::guard('admin')->user()->firstname}} {{ Auth::guard('admin')->user()->lastname}}</span></h3>
        </div>  
        
        <br>
        
        <div class="row">
         
            <div class="col-md-12 grid-margin stretch-card">
              <table>
                <thead>
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Total Score</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($students) && $students->count())
                        @foreach($students as $student)
                            @if(!empty($student->pass_fail_status) && $student->pass_fail_status->count())
                                @foreach($student->pass_fail_status as $result)
                                    <tr>
                                        <td>{{ $result['firstname'] }}</td>
                                        <td>{{ $result['lastname'] }}</td>
                                        <td>{{ $result['gender'] }}</td>
                                        <td>{{ $result['email'] }}</td>
                                        <td>{{ $result['total_score'] }}</td>
                                        <td>{{ $result['status'] }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">No students found.</td>
                        </tr>
                    @endif
                </tbody>
            </table>

            </div>

            </div>
        </div>
@endsection