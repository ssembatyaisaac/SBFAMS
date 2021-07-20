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
          <h3 class="card-title">Register Payments</h3>

        </div>
        <!-- /.card-header -->
        <form action="{{ route ('payment.store') }}" method="post">
          @csrf
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="student_name">Name:</label>
                  <select class="form-control select2" placeholder="Select Student" name="student_name" style="width: 100%;">
                    @foreach ($students as $student)
                      <option>{{ $student->user->name }}</option>
                    @endforeach
                  </select>
                <div class="form-group">
                  <label for="student_number">Student Number:</label>
                  <input type="text" class="form-control" name="student_number" id="student_number">
                </div>
                <div class="form-group">
                  <label for="amount">Amount:</label>
                  <input type="number" class="form-control" step="1" min="100000" name="amount" id="amount">
                </div>
                <div class="form-group">
                  <label for="academic_year">Academic Year:</label>
                  <input type="text" class="form-control" name="academic_year" id="academic_year">
                </div>
                <div class="form-group">
                  <label for="semster">Semster:</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="semster" id="name" value="1">
                    <label class="form-check-label">I</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="semster" id="name" value="2">
                    <label class="form-check-label">II</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="receipt_id">Receipt ID:</label>
                  <input type="text" class="form-control" name="receipt_id" id="receipt_id">
                </div>
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