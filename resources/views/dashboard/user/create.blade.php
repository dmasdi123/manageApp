@extends('dashboard.layouts.main')
@section('container')
<div class="row justify-content-center">
  <div class="col-6">
                <!-- Horizontal Form -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">User Form</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="/user" method="POST" class="form-horizontal">
                    @csrf
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                          <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-10">
                          <input type="number" name="notelp" class="form-control" placeholder="No Telp">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Role</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" name="role">
                            <option value="Staff Administrator">Staff Administrator</option>
                            <option value="Web Developer">Web Developer</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                      <button type="submit" class="btn btn-success">Add New User</a>
                    </div>
                    <!-- /.card-footer -->
                  </form>
                </div>
                <!-- /.card -->
  </div>
</div>
@endsection