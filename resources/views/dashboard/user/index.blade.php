@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col">
        <a href="/user/create" class="btn btn-success"><i class="fas fa-plus"></i> Add User</a>
    </div>
</div>
@if(session()->has('success'))
<br>
<div class="row">
  <div class="col">
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  </div>
</div>
@endif
<br>
<div class="row">
  <div class="col">
    <!-- TABLE -->
    <div class="card">
      <div class="card-header border-transparent">
        <h3 class="card-title">Web Developers</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse">
            <i class="fas fa-minus"></i>
          </button>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body p-0">
        <div class="table-responsive">
          <table class="table m-0">
            <thead>
            <tr>
              <th>No</th>
              <th>Email</th>
              <th>Password</th>
              <th>Name</th>
              <th>Notelp</th>
              <th>Created at</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($webdevinfo as $devinfo)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $devinfo->email }}</td>
                <td>{{ $devinfo->password }}</td>
                <td>{{ $devinfo->name }}</td>
                <td>{{ $devinfo->notelp }}</td>
                <td>{{ $devinfo->created_at->diffForHumans() }}</td>
                <td>
                  <a href="/user/{{ $devinfo->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                  <form action="/user/{{ $devinfo->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.table-responsive -->
      </div>
      <!-- /.card-body -->
      <div class="card-footer clearfix">
        <br>
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
</div>
</div>
<div class="row">
    <div class="col">
      <!-- TABLE -->
      <div class="card">
        <div class="card-header border-transparent">
          <h3 class="card-title">Staff Administrator</h3>
  
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table m-0">
              <thead>
              <tr>
                <th>No</th>
                <th>Email</th>
                <th>Password</th>
                <th>Name</th>
                <th>Notelp</th>
                <th>Created at</th>
                <th>Action</th>
              </tr>
              </thead>
              <tbody>
                @foreach ($admininfo as $adminfo)
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $adminfo->email }}</td>
                  <td>{{ $adminfo->password }}</td>
                  <td>{{ $adminfo->name }}</td>
                  <td>{{ $adminfo->notelp }}</td>
                  <td>{{ $adminfo->created_at->diffForHumans() }}</td>
                  <td>
                    <a href="/user/{{ $adminfo->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                    <form action="/user/{{ $adminfo->id }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <!-- /.table-responsive -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer clearfix">
          <br>
        </div>
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->
  </div>
  </div>
@endsection
