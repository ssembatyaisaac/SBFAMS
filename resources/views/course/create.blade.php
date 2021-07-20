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
          <h3 class="card-title">Register Course</h3>

        </div>
        <!-- /.card-header -->
        <form action="{{ route ('course.store') }}" method="post">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="name">Course Name:</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                  <label for="code">Code:</label>
                  <input type="text" class="form-control" name="code" id="code">
                </div>
                <div class="form-group">
                  <label for="duration">Duration:</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="duration" id="duration" value="24">
                    <label class="form-check-label">2 years</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="duration" id="duration" value="12">
                    <label class="form-check-label">1 year</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="duration" id="duration" value="6">
                    <label class="form-check-label">6 months</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="duration" id="duration" value="4">
                    <label class="form-check-label">4 months</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="duration" id="duration" value="3">
                    <label class="form-check-label">3 months</label>
                  </div>
                </div>
                <div class="from-group">
                  <label for="fees">Course fees:</label>
                  <input type="number" class="form-control" name="fees" id="fees">
                </div>
            <button class="btn btn-primary" type="submit">Register</button>
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