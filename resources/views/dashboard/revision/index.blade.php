@extends('dashboard.layouts.main')
@section('container')
<div class="row">
  <div class="col">
      <a href="#" class="btn btn-success"><i class="fas fa-plus"></i> Add Revision</a>
  </div>
</div>
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
              <th>Description</th>
              <th>Status</th>
              <th>Web Dev</th>
              <th>Created at</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1.</td>
              <td>Batikku.store</td>
              <td>Info</td>
              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
              <td><span class="badge badge-warning">Pending</span></td>
              <td>Kevin</td>
              <td>22-07-2023</td>
              <td>
                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Jeansku.store</td>
              <td>Info Pro</td>
              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
              <td><span class="badge badge-warning">Pending</span></td>
              <td>Adrian</td>
              <td>22-07-2023</td>
              <td>
                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
              </td>
            </tr>
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
              <th>Description</th>
              <th>Status</th>
              <th>Progress</th>
              <th>Web Dev</th>
              <th>Created at</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>1.</td>
              <td>Batikku.store</td>
              <td>Info</td>
              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
              <td><span class="badge badge-info">In Progress</span></td>
              <td>50%</td>
              <td>Kevin</td>
              <td>22-07-2023</td>
              <td>
                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Jeansku.store</td>
              <td>Info Pro</td>
              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
              <td><span class="badge badge-info">In Progress</span></td>
              <td>75%</td>
              <td>Adrian</td>
              <td>22-07-2023</td>
              <td>
                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
              </td>
            </tr>
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
            <tbody>
            <tr>
              <td>1.</td>
              <td>Batikku.store</td>
              <td>Info</td>
              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
              <td><span class="badge badge-success">Complete</span></td>
              <td>100%</td>
              <td>Kevin</td>
              <td>22-07-2023</td>
              <td>
                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
              </td>
            </tr>
            <tr>
              <td>2.</td>
              <td>Jeansku.store</td>
              <td>Info Pro</td>
              <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit.</td>
              <td><span class="badge badge-success">Complete</span></td>
              <td>100%</td>
              <td>Adrian</td>
              <td>22-07-2023</td>
              <td>
                <a href="#" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
                <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</a>
              </td>
            </tr>
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
