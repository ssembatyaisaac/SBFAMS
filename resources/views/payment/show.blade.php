@extends('baselayout')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Payments</h1>
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
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Payments</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Academic Year</th>
                    <th>Semster</th>
                    <th>Course</th>
                    <th>Amount (UGX)</th>
                    <th>Balance (UGX)</th>
                    <th>Status</th>
                    <th>Receipt ID</th>
                  </tr>
                  </thead>
                  <tbody>
                    <tr>
                        <td>2021/2022</td>
                        <td> I </td>
                        <td>Software Engineering</td>
                        <td> 450,000 </td>
                        <td> 200,000 </td>
                        <td> Partial Payment</td>
                        <td> 453988 </td>
                    </tr>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Academic Year</th>
                    <th>Semster</th>
                    <th>Course</th>
                    <th>Amount (UGX)</th>
                    <th>Balance (UGX)</th>
                    <th>Status</th>
                    <th>Receipt ID</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection