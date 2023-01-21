@extends('dashboard.layouts.main')
@section('container')
<div class="row">
  <div class="col">
      <a href="/report/create" class="btn btn-success"><i class="fas fa-plus"></i> Add Report</a>
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
        <h3 class="card-title">Waiting List</h3>

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
              <th>Name</th>
              <th>Category</th>
              <th style="width: 40%">Description</th>
              <th>Status</th>
              <th>Created at</th>
              <th>Action</th>
            </tr>
            </thead>
            @foreach ($admreppend as $admpend)
            <tbody>
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $admpend->name_project }}</td>
                <td>{{ $admpend->category->name_category }}</td>
                <td style="width: 40%">{{ $admpend->desc_report }}</td>
                <td><span class="badge badge-warning">Pending</span></td>
                <td>{{ $admpend->created_at->diffForHumans() }}</td>
                <td>
                  <a href="/report/{{ $admpend->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                  <form action="/report/{{ $admpend->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
              </tbody>
            @endforeach
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
<br>
<br>
<div class="row">
  <div class="col">
    <!-- TABLE -->
    <div class="card">
      <div class="card-header border-transparent">
        <h3 class="card-title">In Progress</h3>

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
              <th>Name</th>
              <th>Category</th>
              <th style="width: 40%">Description</th>
              <th>Status</th>
              <th>Progress</th>
              <th>Web Dev</th>
              <th>Created at</th>
              <th>Action</th>
            </tr>
            </thead>
            @foreach ($admrepprog as $admprog)
            <tbody>
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $admprog->name_project }}</td>
                <td>{{ $admprog->category->name_category }}</td>
                <td style="width: 40%">{{ $admprog->desc_report }}</td>
                <td><span class="badge badge-info">In Progress</span></td>
                <td>{{ $admprog->progress }}</td>
                <td>{{ $admprog->web_dev }}</td>
                <td>{{ $admprog->created_at->diffForHumans() }}</td>
                <td>
                  <a href="/report/{{ $admprog->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                  <form action="/report/{{ $admprog->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
              </tbody>
            @endforeach
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
<br>
<br>
<div class="row">
  <div class="col">
    <!-- TABLE -->
    <div class="card">
      <div class="card-header border-transparent">
        <h3 class="card-title">Complete</h3>

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
              <th>Name</th>
              <th>Category</th>
              <th>Description</th>
              <th>Status</th>
              <th>Progress</th>
              <th>Web Dev</th>
              <th>Created at</th>
              <th>Action</th>
            </tr>
            </thead>
            @foreach ($admrepcomp as $admcomp)
            <tbody>
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $admcomp->name_project }}</td>
                <td>{{ $admcomp->category->name_category }}</td>
                <td style="width: 40%">{{ $admcomp->desc_report }}</td>
                <td><span class="badge badge-success">Complete</span></td>
                <td>{{ $admcomp->progress }}</td>
                <td>{{ $admcomp->web_dev }}</td>
                <td>{{ $admcomp->created_at->diffForHumans() }}</td>
                <td>
                  <a href="/report/{{ $admcomp->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                  <form action="/report/{{ $admcomp->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
              </tbody>
            @endforeach
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
<br>
<br>

{{-- web dev section --}}
<div class="row">
  <div class="col">
    <!-- TABLE -->
    <div class="card">
      <div class="card-header border-transparent">
        <h3 class="card-title">In Progress</h3>

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
              <th>Name</th>
              <th>Category</th>
              <th style="width: 40%">Description</th>
              <th>Status</th>
              <th>Progress</th>
              <th>Web Dev</th>
              <th>Created at</th>
              <th>Action</th>
            </tr>
            </thead>
            @foreach ($devrepprog as $devprog)
            <tbody>
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $devprog->name_project }}</td>
                <td>{{ $devprog->category->name_category }}</td>
                <td style="width: 40%">{{ $devprog->desc_report }}</td>
                <td><span class="badge badge-info">In Progress</span></td>
                <td>{{ $devprog->progress }}</td>
                <td>{{ $devprog->web_dev }}</td>
                <td>{{ $devprog->created_at->diffForHumans() }}</td>
                <td>
                  <a href="/report/{{ $devprog->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                  <form action="/report/{{ $devprog->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
              </tbody>
            @endforeach
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
<br>
<br>
<div class="row">
  <div class="col">
    <!-- TABLE -->
    <div class="card">
      <div class="card-header border-transparent">
        <h3 class="card-title">Complete</h3>

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
              <th>Name</th>
              <th>Category</th>
              <th>Description</th>
              <th>Status</th>
              <th>Progress</th>
              <th>Web Dev</th>
              <th>Created at</th>
              <th>Action</th>
            </tr>
            </thead>
            @foreach ($devrepcomp as $devcomp)
            <tbody>
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $devcomp->name_project }}</td>
                <td>{{ $devcomp->category->name_category }}</td>
                <td style="width: 40%">{{ $devcomp->desc_report }}</td>
                <td><span class="badge badge-success">Complete</span></td>
                <td>{{ $devcomp->progress }}</td>
                <td>{{ $devcomp->web_dev }}</td>
                <td>{{ $devcomp->created_at->diffForHumans() }}</td>
                <td>
                  <a href="/report/{{ $devcomp->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                  <form action="/report/{{ $devcomp->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                  </form>
                </td>
              </tr>
              </tbody>
            @endforeach
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
