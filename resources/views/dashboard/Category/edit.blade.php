@extends('dashboard.layouts.main')
@section('container')
<div class="row justify-content-center">
  <div class="col-6">
                <!-- Horizontal Form -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Categories Form</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="/categories/{{ $category->id }}" method="POST" class="form-horizontal">
                    @method('put')
                    @csrf
                    <div class="card-body">
                      <input type="hidden" name="user_id" value="{{ $category->user_id }}">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                          <input type="text" name="name_category" class="form-control" value="{{ $category->name_category }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Descriptions</label>
                        <div class="col-sm-10">
                          <input type="text" name="desc_category" class="form-control" value="{{ $category->desc_category }}">
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                      <button type="submit" class="btn btn-success">Add New Category</a>
                    </div>
                    <!-- /.card-footer -->
                  </form>
                </div>
                <!-- /.card -->
  </div>
</div>
@endsection