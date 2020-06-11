<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="{{config('waslinsek.logo_url')}}" alt="LOGO BPKP" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">@WASLINSEK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{config('waslinsek.default_url')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{auth()->user()->nama}}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
       </ul>
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="/administrator/user_admin" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                User Managements
              </p>
            </a>
          </li>
          </ul>
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Persiapan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/perencanaan/index2" class="nav-link">
                &nbsp;&nbsp;&nbsp; <i class="fas fa-building nav-icon"></i>
                  <p>Objek Pengawasan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/sasaran" class="nav-link">
                &nbsp;&nbsp;&nbsp;  <i class="fas fa-book-reader nav-icon"></i>
                  <p>Indeks Program</p>
                </a>
              </li>
            </ul>
          </li>
       </ul>
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Pelaksanaan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/pelaksanaan/index" class="nav-link">
                &nbsp;&nbsp;&nbsp;  <i class="fas fa-city"></i>
                  <p> Objek Pengawasan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/wilayah" class="nav-link">
                &nbsp;&nbsp;&nbsp;  <i class="fas fa-house-user"></i>
                  <p> Dukungan Pemda</p>
                </a>
              </li>
            </ul>
          </li>
          </ul>
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pelaporan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Pelaporan</p>
                </a>
              </li>
            </ul>
          </li>
          </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
