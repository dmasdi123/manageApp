  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <p class="brand-link">
      <img src="/dist/img/webcare.png" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8">
      <span class="brand-text font-weight-light">Webcare</span>
    </>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-1 mb-1 d-flex">
        <div class="info">
          <p class="d-block">{{ auth()->user()->name }}</p>
        </div>
      </div>
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="/homepage" class="d-block">Dashboard</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-header">Task</li>
          <li class="nav-item">
            <a href="/project" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Projects
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/revision" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Revisions
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/report" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Reports
              </p>
            </a>
          </li>
          <li class="nav-header">Others</li>
          <li class="nav-item">
            <a href="/categories" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Categories
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/user" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>