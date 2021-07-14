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
          <h3 class="card-title">Register Admin</h3>

        </div>
        <!-- /.card-header -->
        <form action="{{ route ('admin.store') }}" method="post">
          @csrf
          <div class="card-body">
            <h5>1.1: ADMIN'S PERSONAL INFORMATION</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="course">Name:</label>
                  <input type="text" class="form-control" name="name" id="name">
                </div>
                <div class="form-group">
                  <label for="gender">Gender:</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Male">
                    <label class="form-check-label">Male</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="gender" value="Female">
                    <label class="form-check-label">Female</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="date_of_birth">Date Of Birth:</label>
                  <input type="date" class="form-control" name="date_of_birth" id="date_of_birth">
                </div>
                <div class="form-group">
                  <label for="religion">Religion:</label>
                  <input type="text" class="form-control" name="religion" id="religion">
                </div>
                <div class="form-group">
                  <label for="marital_status">Marital Status:</label>
                  <input type="text" class="form-control" name="marital_status" id="marital_status">
                </div>
                <div class="form-group">
                  <label for="spouse_name">Spouse Name:</label>
                  <input type="text" class="form-control" name="spouse_name" id="spouse_name">
                </div>
        
                <div class="form-group">
                  <label for="spouse_contact">Spouse Contact:</label>
                  <input type="tel" class="form-control" name="spouse_contact" id="spouse_contact">
                </div>
              </div>
            </div>

            <h5>1.2: DISABILITY</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="disability">Do you have any disability?</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="disability" id="name" value="Yes">
                    <label class="form-check-label">Yes</label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="disability" id="name" value="No">
                    <label class="form-check-label">No</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="nature_of_disability">Nature Of Disability:</label>
                  <input type="text" class="form-control" name="nature_of_disability" id="nature_of_disability">
                </div>
              </div>
            </div>

            <h5>1.3: ADMIN’S CONTACT</h5>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="email">Email:</label>
                  <input type="email" class="form-control" name="email" id="email">
                </div>
                <div class="form-group">
                  <label for="phone_1">Phone Number:</label>
                  <input type="tel" class="form-control" name="phone_1" id="phone_1">                
                </div>
                <div class="form-group">
                  <label for="phone_2">Alt Phone Number:</label>
                  <input type="tel" class="form-control" name="phone_2" id="phone_2">                 
                </div>
              </div>
            </div>

            <h5>1.4 PARENTS/GUARDIAN’S (next of kin) CONTACT</h5>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="father_name">Father's (Guardian) Name:</label>
                  <input type="text" class="form-control" name="father_name" id="father_name">
                </div>
        
                <div class="form-group">
                  <label for="father_contact">Father's (Guardian) Contact:</label>
                  <input type="tel" class="form-control" name="father_contact" id="father_contact">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="mother_name">Mother's (Guardian) Name:</label>
                  <input type="text" class="form-control" name="mother_name" id="mother_name">
                </div>
        
                <div class="form-group">
                  <label for="mother_contact">Mother (Guardian) Contact:</label>
                  <input type="tel" class="form-control" name="mother_contact" id="mother_contact">
                </div>
              </div>
            </div>

            <input type="hidden" name="role" value="Admin">
            <input type="hidden" name="password" value="secret">
            
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