@extends('dashboard.layouts.main')
@section('container')
@can('admin')
<div class="row">
  <div class="col-12 col-sm-6 col-md-4">
    <div class="info-box">
      <span class="info-box-icon bg-success elevation-1"><i class="fas fa-file-alt"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Project</span>
        <span class="info-box-number">10</span>
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
        <span class="info-box-number">41,410</span>
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
        <span class="info-box-number">760</span>
        <a href="/report" class="nav-links"> <span class="info-box-text">View All</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
</div>
<div class="row">
  <div class="col-12 col-sm-6 col-md-6">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Teams</span>
        <span class="info-box-number">2,000</span>
        <a href="/user" class="nav-links"> <span class="info-box-text">View All</span></a>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
  <!-- /.col -->
  <div class="col-12 col-sm-6 col-md-6">
    <div class="info-box mb-3">
      <span class="info-box-icon bg-warning elevation-1"><i class="	fas fa-tags"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Categories</span>
        <span class="info-box-number">2,000</span>
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
        <span class="info-box-number">10</span>
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
        <span class="info-box-number">41,410</span>
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
        <span class="info-box-number">760</span>
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
