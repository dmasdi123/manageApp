<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-6" href="#">WebcareIDN</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <h4 class="text-light">Web Developer, Febrian Dimas Winaputra</h4>
    {{-- <h4 class="text-light">{{ auth()->user()->role }}, {{ auth()->user()->name }}</h4> --}}
    {{-- <input class="form-control form-control-dark w-100 rounded-0 border-0" type="text" placeholder="Search" aria-label="Search"> --}}
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="POST">
          @csrf
          <button class="nav-link px-3 bg-dark border-0" type="submit"><i class="bi bi-box-arrow-right"></i> Logout</button>
        </form>
  
      </div>
    </div>
  </header>