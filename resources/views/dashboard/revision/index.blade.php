@extends('dashboard.layouts.main')
@section('container')
@can('admin')
<div class="row">
  <div class="col">
      <a href="/revision/create" class="btn btn-success"><i class="fas fa-plus"></i> Add Revision</a>
  </div>
</div>
@endcan
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
            @foreach ($admrevpend as $admpend)
            <tbody>
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $admpend->name_project }}</td>
                <td>{{ $admpend->category->name_category }}</td>
                <td style="width: 40%; text-overflow: ellipsis">{{ $admpend->desc_revision }}</td>
                <td><span class="badge badge-warning">Pending</span></td>
                <td>{{ $admpend->created_at->diffForHumans() }}</td>
                <td>
                  <a href="/revision/{{ $admpend->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                  @can('admin')
                  <form action="/revision/{{ $admpend->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                  </form>
                  @endcan
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
@can('admin')
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
            @foreach ($admrevprog as $admprog)
            <tbody>
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $admprog->name_project }}</td>
                <td>{{ $admprog->category->name_category }}</td>
                <td style="width: 40%">{{ $admprog->desc_revision }}</td>
                <td><span class="badge badge-info">In Progress</span></td>
                <td>{{ $admprog->progress }}</td>
                <td>{{ $admprog->web_dev }}</td>
                <td>{{ $admprog->created_at->diffForHumans() }}</td>
                <td>
                  <a href="/revision/{{ $admprog->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                  <form action="/revision/{{ $admprog->id }}" method="POST" class="d-inline">
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
            @foreach ($admrevcomp as $admcomp)
            <tbody>
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $admcomp->name_project }}</td>
                <td>{{ $admcomp->category->name_category }}</td>
                <td style="width: 40%">{{ $admcomp->desc_revision }}</td>
                <td><span class="badge badge-success">Complete</span></td>
                <td>{{ $admcomp->progress }}</td>
                <td>{{ $admcomp->web_dev }}</td>
                <td>{{ $admcomp->created_at->diffForHumans() }}</td>
                <td>
                  <a href="/revision/{{ $admcomp->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                  <form action="/revision/{{ $admcomp->id }}" method="POST" class="d-inline">
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
      <div class="card-footer clearfix text-right">
        <br>
        <a href="/revisioncomp" target=???_blank??? class="btn btn-info">Print Out</a>
      </div>
      <!-- /.card-footer -->
    </div>
    <!-- /.card -->
  </div>
</div>
@endcan
<br>
<br>

@can('webdev')
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
            @foreach ($devrevprog as $devprog)
            <tbody>
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $devprog->name_project }}</td>
                <td>{{ $devprog->category->name_category }}</td>
                <td style="width: 40%">{{ $devprog->desc_revision }}</td>
                <td><span class="badge badge-info">In Progress</span></td>
                <td>{{ $devprog->progress }}</td>
                <td>{{ $devprog->web_dev }}</td>
                <td>{{ $devprog->created_at->diffForHumans() }}</td>
                <td>
                  <a href="/revision/{{ $devprog->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                  <form action="/revision/{{ $devprog->id }}" method="POST" class="d-inline">
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
            @foreach ($devrevcomp as $devcomp)
            <tbody>
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $devcomp->name_project }}</td>
                <td>{{ $devcomp->category->name_category }}</td>
                <td style="width: 40%">{{ $devcomp->desc_revision }}</td>
                <td><span class="badge badge-success">Complete</span></td>
                <td>{{ $devcomp->progress }}</td>
                <td>{{ $devcomp->web_dev }}</td>
                <td>{{ $devcomp->created_at->diffForHumans() }}</td>
                <td>
                  <a href="/revision/{{ $devcomp->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                  @can('admin')
                  <form action="/revision/{{ $devcomp->id }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
                  </form>
                  @endcan
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
@endcan
  
@endsection
