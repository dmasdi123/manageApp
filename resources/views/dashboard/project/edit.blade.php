@extends('dashboard.layouts.main')
@section('container')
@can('admin')
<div class="row justify-content-center">
  <div class="col-6">
                <!-- Horizontal Form -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"> Edit Project Form</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="/project/{{ $project->id }}" method="POST" class="form-horizontal">
                    @method('put')
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $project->user_id }}">
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name Project</label>
                        <div class="col-sm-10">
                          <input type="text" name="name_project" class="form-control" value="{{ $project->name_project }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" name="category_id">
                            <option value="{{ $project->category_id }}">{{ $project->category->name_category }}</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Web Developer</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" name="web_dev">
                            <option value="{{ $project->web_dev }}">{{ $project->web_dev }}</option>
                            @foreach ($webdevinfo as $webdev)
                            <option value="{{ $webdev->name }}">{{ $webdev->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" name="status">
                            <option value="{{ $project->status }}">{{ $project->status }}</option>
                            <option value="Pending">Pending</option>
                            <option value="In Progress">In Progress</option>
                            <option value="Complete">Complete</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Progress</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" name="progress">
                            <option value="{{ $project->progress }}">{{ $project->progress }}</option>
                            <option value="0%">0%</option>
                            <option value="25%">25%</option>
                            <option value="50%">50%</option>
                            <option value="75%">75%</option>
                            <option value="100%">100%</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Project Description</label>
                        <div class="col-sm-10">
                          <input type="text" name="desc_project" class="form-control" value="{{ $project->desc_project }}">
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                      <button type="submit" class="btn btn-success">Save Changes</a>
                    </div>
                    <!-- /.card-footer -->
                  </form>
                </div>
                <!-- /.card -->
  </div>
</div>
@endcan

{{-- webdev section --}}
@can('webdev')
<div class="row justify-content-center">
  <div class="col-6">
                <!-- Horizontal Form -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"> Edit Project Form</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="/project/{{ $project->id }}" method="POST" class="form-horizontal">
                    @method('put')
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $project->user_id }}">
                    <div class="card-body">
                      <input type="hidden" name="name_project" value="{{ $project->name_project }}">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name Project</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="{{ $project->name_project }}" disabled>
                        </div>
                      </div>
                      <input type="hidden" name="category_id" value="{{ $project->category_id }}">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" disabled>
                            <option value="{{ $project->category_id }}">{{ $project->category->name_category }}</option>
                          </select>
                        </div>
                      </div>
                      <input type="hidden" name="web_dev" value="{{ $project->web_dev }}">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Web Developer</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" disabled>
                            <option value="{{ $project->web_dev }}">{{ $project->web_dev }}</option>
                          </select>
                        </div>
                      </div>
                      <input type="hidden" name="status" value="{{ $project->status }}">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" disabled>
                            <option value="{{ $project->status }}">{{ $project->status }}</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Progress</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" name="progress">
                            <option value="{{ $project->progress }}">{{ $project->progress }}</option>
                            <option value="0%">0%</option>
                            <option value="25%">25%</option>
                            <option value="50%">50%</option>
                            <option value="75%">75%</option>
                            <option value="100%">100%</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Project Description</label>
                        <div class="col-sm-10">
                          <input type="text" name="desc_project" class="form-control" value="{{ $project->desc_project }}">
                        </div>
                      </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer text-center">
                      <button type="submit" class="btn btn-success">Save Changes</a>
                    </div>
                    <!-- /.card-footer -->
                  </form>
                </div>
                <!-- /.card -->
  </div>
</div>
@endcan
@endsection