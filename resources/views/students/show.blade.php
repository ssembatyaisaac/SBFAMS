@extends('baselayout')

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Profile</h1>
          @if (Auth::user()->role == 'Admin' || Auth::user()->role == 'Super User')
          <a class="btn btn-primary" href="{{ route('student.edit',['student'=>$student]) }}">Edit Student</a>
          @endif
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item active">{{Auth::user()->role}}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                     src="{{ asset('dist/img/user2-160x160.jpg')}}"
                     alt="User profile picture">
              </div>

              <h3 class="profile-username text-center">{{$student->user->name}}</h3>

              <p class="text-muted text-center">{{ $student->course->name }}</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
          <!-- About Me Box -->
          <div class="card card-primary">
            <div class="card-body">
              <strong></i>Intake</strong>

              <p class="text-muted">{{ $student->intake }}</p>

              <hr>

              <strong></i>Academic Year</strong>

              <p class="text-muted">2021/2022</p>

              <hr>

              <strong>Mode of Delivery</strong>

              <p class="text-muted">{{ $student->delivery }}</p>

              <hr>

              <strong>Sponsorship</strong>

              <p class="text-muted">{{ $student->sponsorship }}</p>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">
                <i class="fas fa-user"></i>
                Personal Information
              </h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="callout">
                <div class="row">
                  <div class="col-md-5">
                    <h5>Name:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->name }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <h5>Email:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->email }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <h5>Phone Numbers:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->phone_1 }} <br> {{ $student->user->phone_2}} </p>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-md-5">
                    <h5>Gender:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->gender}}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <h5>Date Of Birth:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->date_of_birth }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <h5>Religion:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->religion }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <h5>Marital Status:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->marital_status }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <h5>Spouse Name:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->spouse_name }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <h5>Spouse Contact:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->spouse_contact }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <h5>Disability:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->disability }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <h5>Nature of Disability:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->nature_of_disability }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <h5>Father's (Guardian) Name:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->father_name }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <h5>Father's (Guardian) Contact:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->father_contact }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <h5>Mother's (Guardian) Name:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->mother_name }}</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-5">
                    <h5>Mother's (Guardian) Contact:</h5>
                  </div>
                  <div class="col-md-7">
                    <p>{{ $student->user->mother_contact }}</p>
                  </div>
                </div>
              </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection