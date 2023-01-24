@extends('dashboard.layouts.main')
@section('container')
@can('admin')
<div class="row justify-content-center">
  <div class="col-6">
                <!-- Horizontal Form -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"> Edit Report Form</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="/report/{{ $report->id }}" method="POST" class="form-horizontal">
                    @method('put')
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $report->user_id }}">
                    <div class="card-body">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name Project</label>
                        <div class="col-sm-10">
                          <input type="text" name="name_project" class="form-control" value="{{ $report->name_project }}">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" name="category_id">
                            <option value="{{ $report->category_id }}">{{ $report->category->name_category }}</option>
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
                            <option value="{{ $report->web_dev }}">{{ $report->web_dev }}</option>
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
                            <option value="{{ $report->status }}">{{ $report->status }}</option>
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
                            <option value="{{ $report->progress }}">{{ $report->progress }}</option>
                            <option value="0%">0%</option>
                            <option value="25%">25%</option>
                            <option value="50%">50%</option>
                            <option value="75%">75%</option>
                            <option value="100%">100%</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Report Description</label>
                        <div class="col-sm-10">
                          <input type="text" name="desc_report" class="form-control" value="{{ $report->desc_report }}">
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

@can('webdev')
<div class="row justify-content-center">
  <div class="col-6">
                <!-- Horizontal Form -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title"> Edit Report Form</h3>
                  </div>
                  <!-- /.card-header -->
                  <!-- form start -->
                  <form action="/report/{{ $report->id }}" method="POST" class="form-horizontal">
                    @method('put')
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $report->user_id }}">
                    <input type="hidden" name="name_project" value="{{ $report->name_project }}">
                    <div class="card-body">
                      <div class="form-group row">
                        <input type="hidden" value="{{ $report->name_project }}">
                        <label class="col-sm-2 col-form-label">Name Project</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" value="{{ $report->name_project }}" disabled>
                        </div>
                      </div>
                      <input type="hidden" name="category_id" value="{{ $report->category_id }}">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Category</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" disabled>
                            <option value="{{ $report->category_id }}">{{ $report->category->name_category }}</option>
                          </select>
                        </div>
                      </div>
                      <input type="hidden" name="web_dev" value="{{ $report->web_dev }}">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Web Developer</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" disabled>
                            <option value="{{ $report->web_dev }}">{{ $report->web_dev }}</option>
                          </select>
                        </div>
                      </div>
                      <input type="hidden" name="status" value="{{ $report->status }}">
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" disabled>
                            <option value="{{ $report->status }}">{{ $report->status }}</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Progress</label>
                        <div class="col-sm-10">
                          <select class="custom-select rounded-0" name="progress">
                            <option value="{{ $report->progress }}">{{ $report->progress }}</option>
                            <option value="0%">0%</option>
                            <option value="25%">25%</option>
                            <option value="50%">50%</option>
                            <option value="75%">75%</option>
                            <option value="100%">100%</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-2 col-form-label">Report Description</label>
                        <div class="col-sm-10">
                          <textarea name="desc_report" class="form-control" cols="20" rows="10" value="{{ $report->desc_report }}">{{ $report->desc_report }}</textarea>
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