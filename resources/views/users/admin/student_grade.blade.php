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
                <div class="card" style="box-shadow:0px 8px 16px 0px rgba(0, 0, 0, 0.2);">
                    <div class="card-header text-center">Student's grade status</div>
                    <div class="card-body">
                      <table class="table table-striped table-bordered">
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
                                                
                                                <td class="{{ $result['status'] == 'Pass' ? 'text-primary' : 'text-danger' }}">
                                                    <b>{{ $result['total_score'] }}</b>
                                                </td>
                                                <td class="{{ $result['status'] == 'Pass' ? 'text-primary' : 'text-danger' }}">
                                                    <b>{{ $result['status'] }}</b>
                                                </td>
                                            </tr>


                                        @endforeach
                                    @endif
                                @endforeach
                                <button class="btn btn-primary mb-2 float-right d-flex align-items-center">
                                    <i class="mdi mdi-download" style="margin-right: 8px;"></i>
                                    Generate pdf file
                                </button>
                            @else
                                <tr>
                                    <td colspan="6">No students found.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- <div class="col-md-2"></div> -->
        </div>
@endsection