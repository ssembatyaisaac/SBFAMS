@extends('baselayout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="col-md-12">
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-user"></i>
                Registration Form
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="callout">
                <strong>Welcome to on-line Registration</strong>
                <p><strong>Academic Year: </strong>{{session('academic_year') }}</p>
                <p><strong>Semster: </strong>{{session('semster') }}</p>
                <p>
                  NOTE: <br>
                  Registration is Mandatory! <br><br>
                </p>
                <form action="{{ route('registration.store') }}" method="post" style="display: flex; justify-content: center;">
                  @csrf
                  @if (count($registrations) != 0) <!--available registration-->
                    @foreach ($registrations as $registration)
                      @if ($registration->academic_year == session('academic_year') & $registration->semster == session('semster'))
                        <button class="btn btn-default" disabled="disabled">Already Registered</button>
                      @else
                        <input type="hidden" name="student" value={{ Auth::user()->student->id }}>
                        <button class="btn btn-primary" type="submit">Register</button>
                      @endif
                    @endforeach
                  @else
                    <input type="hidden" name="student" value={{ Auth::user()->student->id }}>
                    <button class="btn btn-primary" type="submit">Register</button>
                  @endif
                </form>
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection