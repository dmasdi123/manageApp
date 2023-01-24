@extends('dashboard.layouts.main')
@section('container')
@can('admin')
<div class="row">
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-file-alt"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Project</span>
        <span class="info-box-number">{{ $totalproj }}</span>
        <a href="/project" class="nav-links"> <span class="info-box-text">View All</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file-alt"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Revision</span>
        <span class="info-box-number">{{ $totalrev }}</span>
        <a href="/revision" class="nav-links"> <span class="info-box-text">View All</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-file-alt"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Report</span>
        <span class="info-box-number">{{ $totalrep }}</span>
        <a href="/report" class="nav-links"> <span class="info-box-text">View All</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
<div class="row">
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Staff Administrator</span>
        <span class="info-box-number">{{ $totaladm }}</span>
        <a href="/user" class="nav-links"> <span class="info-box-text">View All</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Web Developers</span>
        <span class="info-box-number">{{ $totaldev }}</span>
        <a href="/user" class="nav-links"> <span class="info-box-text">View All</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="	fas fa-tags"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Categories</span>
        <span class="info-box-number">{{ $totalcate }}</span>
        <a href="/categories" class="nav-links"> <span class="info-box-text">View All</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
@endcan

@can('webdev')
<div class="row">
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-file-alt"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Project</span>
        <span class="info-box-number">{{ $devtotalproj }}</span>
        <a href="/project" class="nav-links"> <span class="info-box-text">View All</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-info elevation-1"><i class="fas fa-file-alt"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Revision</span>
        <span class="info-box-number">{{ $devtotalrev }}</span>
        <a href="/revision" class="nav-links"> <span class="info-box-text">View All</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->

  <!-- fix for small devices only -->
  <div class="clearfix hidden-md-up"></div>

  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-file-alt"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Report</span>
        <span class="info-box-number">{{ $devtotalrep }}</span>
        <a href="/report" class="nav-links"> <span class="info-box-text">View All</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
@endcan
@endsection
