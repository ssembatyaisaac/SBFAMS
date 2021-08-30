@extends('baselayout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Change Password</h3>

          </div>
          <!-- /.card-header -->
          <form action="{{ route('updatePassword',['user'=>Auth::user()]) }}" method="post">
            @csrf
            <div class="card-body">
              <h5>Enter New Password</h5>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="password1">Password:</label>
                    <input type="password" class="form-control" name="password1" id="password1">
                  </div>
                  <div class="form-group">
                    <label for="password2">Confirm Password:</label>
                    <input type="password" class="form-control" name="password2" id="password2">
                  </div>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Submit</button>
            </div>
            <!-- /.card-body -->
          </form>
          
        </div>
        <!-- /.card -->

      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection