@extends('dashboard.layouts.main')

@section('container')
    <div class="col-lg-6">
        <main class="form-registration">
            <form action="/user" method="POST">
              @csrf
              {{-- <img class="mb-4" src="https://source.unsplash.com/650x400?login" alt=""> --}}
              <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>    
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="email@example.com" required>
                <label for="email">Email Address</label>
                @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required>
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="notelp" class="form-control rounded-top @error('notelp') is-invalid @enderror" id="notelp" placeholder="No Telp" required>
                <label for="name">No Telp</label>
                @error('notelp')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <select id="role" name="role" class="form-select rounded-top @error('role') is-invalid @enderror">
                  <option>Staff Administrator</option>
                  <option>Web Developer</option>
                </select>
              </div>
              <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Register</button>
            </form>
            <small class="d-flex justify-content-center mt-3">Already Registered? <a href="/login">Login!</a></small>
          </main>  
    </div>
@endsection