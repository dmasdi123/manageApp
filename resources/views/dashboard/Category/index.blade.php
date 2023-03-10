@extends('dashboard.layouts.main')
@section('container')
@can('admin')
<div class="row">
  <div class="col">
      <a href="/categories/create" class="btn btn-success"><i class="fas fa-plus"></i> Add New Category</a>
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
  @foreach ($categories as $cat)
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h1 class="card-title badge badge-info mb-3 p-3">{{ $cat->name_category }}</h1>
          <br>
          <p class="card-text">{{ $cat->desc_category }}</p>
          @can('admin')
          <div class="text-center">
            <a href="/categories/{{ $cat->id }}/edit" class="btn btn-info btn-sm"><i class="fas fa-eye"></i> View</a>
            <form action="/categories/{{ $cat->id }}" method="POST" class="d-inline">
              @method('delete')
              @csrf
              <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>
            </form>
        </div>
          @endcan
        </div>
      </div>
    </div>
  @endforeach
</div>
@endsection