  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <p class="nav-link">{{ auth()->user()->role }}</p>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <form action="/logout" method="POST">
            @csrf
            <button class="nav-link bg-dark border-0" type="submiti c"><i class="fa-regular fa-right-to-bracket"></i> Logout</button>
          </form>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->