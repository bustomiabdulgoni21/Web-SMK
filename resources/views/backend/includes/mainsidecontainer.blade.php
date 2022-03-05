<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/admin" class="brand-link">
      <img src="{{ asset('templates/backend') }}/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SMK ASH SHOHEH 1</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('templates/backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
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
               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-school"></i>
                  <p>
                    Profile
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/visi" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Visi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/misi" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Misi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/tujuan" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Tujuan</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>
                    Jurusan
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/jurusantpm" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>(TPM)</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/jurusantkr" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>(TKR)</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="/staf" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Staff
                    {{-- <i class="fas fa-angle-left right"></i> --}}
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                {{-- <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Administrasi</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pengajar</p>
                    </a>
                  </li>
                </ul> --}}
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-images"></i>
                  <p>
                    Gallery
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pemesinan (TPM)</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kendaraan Ringan (TKR)</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-video"></i>
                  <p>
                    Videos
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pemesinan (TPM)</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kendaraan Ringan (TKR)</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-envelope"></i>
                  <p>
                    News
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>News Category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pemesinan (TPM)</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kendaraan Ringan (TKR)</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-graduation-cap"></i>
                  <p>
                    Alumni
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pemesinan (TPM)</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kendaraan Ringan (TKR)</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-phone"></i>
                  <p>
                    Contac
                    {{-- <i class="fas fa-angle-left right"></i> --}}
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                {{-- <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/layout/top-nav.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Pemesinan (TPM)</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kendaraan Ringan (TKR)</p>
                    </a>
                  </li>
                </ul> --}}
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-cogs"></i>
                  <p>
                    Setting
                    <i class="fas fa-angle-left right"></i>
                    {{-- <span class="badge badge-info right">6</span> --}}
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/header" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Header</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/footer" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Footer</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/manage-user" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>User Setting</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/sosmed" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Sosial Media</p>
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