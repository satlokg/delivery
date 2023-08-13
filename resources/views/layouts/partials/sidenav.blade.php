<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/home') }}" class="brand-link">
      {{-- <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-light">Venus Global</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
     
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
       @if(auth()->user()->role=='super-admin')
          <li class="nav-item">
            <a href="{{route('admins.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Admin
              </p>
            </a>
          </li>
          @endif
          @if(auth()->user()->role=='admin')
          <li class="nav-item">
            <a href="{{route('thanas.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Thana
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('delivery.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Consign
              </p>
            </a>
          </li>
          @endif
          @if(auth()->user()->role=='thana')
          <li class="nav-item">
            <a href="{{route('vahaks.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Patra Vahak
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('delivery.index')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Consign
              </p>
            </a>
          </li>
         @endif
         @if(auth()->user()->role=='vahak')
         <li class="nav-item">
          <a href="{{route('delivery.delv')}}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Consign
            </p>
          </a>
        </li>
         @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>