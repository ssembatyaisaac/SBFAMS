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
          <form action="{{ route('confirmPassword',['user'=>Auth::user()]) }}" method="post">
            @csrf
            <div class="card-body">
              <h5>Enter Old Password</h5>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="old_password">Old Password:</label>
                    <input type="password" class="form-control" name="old_password" id="old_password">
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