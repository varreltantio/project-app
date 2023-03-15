@extends('layouts.main')

@section('container')
<div class="container py-5">
  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-md-8 col-lg-7 col-xl-6">
      <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image" />
    </div>
    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
      <div class="mb-5">
        <i class="fa-solid fa-wheat-awn fa-2x" style="color: #2d31fa"></i>
        <span class="h1 fw-bold mb-0">Projects App</span>
      </div>
      <form action="{{ route('register.store') }}" method="POST">
        @csrf
        <h3 class="fw-bold mb-3 pb-3" style="letter-spacing: 1px">Register</h3>
        <!-- Name input -->
        <div class="form-outline mb-4">
          <label class="form-label fw-bold" for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control form-control-lg fs-6 @error('name') is-invalid @enderror" placeholder="Masukkan Nama..." required value="{{ old('name') }}" />
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <!-- Email input -->
        <div class="form-outline mb-4">
          <label class="form-label fw-bold" for="email">Email address</label>
          <input type="email" name="email" id="email" class="form-control form-control-lg fs-6 @error('email') is-invalid @enderror" placeholder="Masukkan Email..." required value="{{ old('email') }}" />
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <!-- Password input -->
        <div class="form-outline mb-4">
          <label class="form-label fw-bold" for="password">Password</label>
          <div class="input-group">
            <input type="password" name="password" id="password" class="form-control form-control-lg fs-6 @error('password') is-invalid @enderror" placeholder="Masukkan Password..." required />
            <span class="input-group-text">
              <i class="fa-solid fa-eye" id="toggle-password" style="cursor: pointer" toggle="#password"></i>
            </span>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
          </div>
        </div>

        <!-- Role input -->
        <div class="form-outline mb-4">
          <label class="form-label fw-bold" for="role">Pilih Role</label>
          <div class="input-group">
            <select class="form-select" name="role" id="role">
              <option value="user">User</option>
              <option value="gardener">Gardener</option>
              <option value="designer">Designer</option>
            </select>
          </div>
        </div>

        <!-- Submit button -->
        <div class="d-grid gap-2 pt-4">
          <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
          <small class="d-block text-center mt-3">Already registered? <a href="{{ route('login.index') }}">Login now!</a></small>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
