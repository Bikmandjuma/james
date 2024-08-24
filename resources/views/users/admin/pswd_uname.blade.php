@extends('users.admin.cover')
@section('content')
          <div class="row">
                
                <div class="col-12 col-xl-12 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold" style="font-family:san-serif;">Welcome <span style="font-size:30px;font-style:san-serif" class="text-primary">{{ Auth::guard('admin')->user()->firstname}} {{ Auth::guard('admin')->user()->lastname}}</span></h3>
                </div>

          </div>
        
          <div class="row mt-4">
            <div class="col-md-4 grid-margin stretch-card"></div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Password modification</h4>
                  @if($errors->any())
                    <ul class="alert alert-danger" id="msg_error">
                      @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                      @endforeach
                    </ul>
                  @endif
                  
                  <form class="forms-sample" action="{{ route('admin_post_password') }}" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">Current password</label>
                      <input type="password" class="form-control" name="current_password" id="exampleInputEmail1" placeholder="Enter current password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">New Password</label>
                      <input type="password" class="form-control" name="new_password" id="exampleInputPassword1" placeholder="Enter new Password">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputConfirmPassword1">Confirm new Password</label>
                      <input type="password" class="form-control" name="password_confirmation" id="exampleInputConfirmPassword1" placeholder="Re_Enter new Password">
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card"></div>
        </div>

        <script>
          setTimeout(() => {

            var error=document.getElementById('msg_error');
            error.style.display="none";

          },5000);
        </script>

@endsection