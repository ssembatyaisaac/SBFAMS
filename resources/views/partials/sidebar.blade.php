<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  @if (Auth::user()->role == 'Student')
    <a href="{{ route('student.show', ['student' => session('user')])}}" class="brand-link"> 
  @endif
  @if (Auth::user()->role == 'Admin')
    <a href="{{ route('admin.show', ['admin' => session('user')])}}" class="brand-link"> 
  @endif
  @if (Auth::user()->role == 'Accountant')
    <a href="{{ route('accounts.show')}}" class="brand-link"> 
  @endif
  @if (Auth::user()->role == 'Super User')
    <a href="{{ route('superUser')}}" class="brand-link"> 
  @endif
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
        @if (Auth::user()->role == 'Student')
        <li class="nav-item">
          <a href="{{ route('student.show', ['student' => session('user')]) }}" class="nav-link {{ (request()->is('student*')) ? 'active' : '' }}">
            <p>
              Profile
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link {{ (request()->is('accounts*')) ? 'active' : '' }}">
            <p>
              Payments
            </p>
          </a>
        </li>           
        @else
        <li class="nav-item">
          <a href="{{ route('student.index') }}" class="nav-link {{ (request()->is('student*')) ? 'active' : '' }}">
            <p>
              Students
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('accounts.index') }}" class="nav-link {{ (request()->is('accounts*')) ? 'active' : '' }}">
            <p>
              Accountants
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.index') }}" class="nav-link {{ (request()->is('admin*')) ? 'active' : '' }}">
            <p>
              Administrators
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('course.index') }}" class="nav-link {{ (request()->is('course*')) ? 'active' : '' }}">
            <p>
              Courses
            </p>
          </a>
        </li>
        @if (Auth::user()->role == 'Accountant' || Auth::user()->role == 'Super User')
        <li class="nav-item">
          <a href="" class="nav-link {{ (request()->is('admin/cities*')) ? 'active' : '' }}">
            <p>
              Payments
            </p>
          </a>
        </li>          
        @endif
        @endif
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>