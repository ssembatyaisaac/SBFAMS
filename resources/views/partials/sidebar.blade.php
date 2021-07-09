<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">SBFAMS</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{ auth()->user()->name }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
          <a href="{{ route('student.index') }}" class="nav-link">
            <p>
              Students
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('accounts.index') }}" class="nav-link">
            <p>
              Accountants
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.index') }}" class="nav-link">
            <p>
              Administrators
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('course.index') }}" class="nav-link">
            <p>
              Courses
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <p>
              Payments
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>