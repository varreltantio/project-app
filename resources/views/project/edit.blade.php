@extends('layouts.main')

@section('container')
<div class="container h-100">
  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-md-12 mt-5">
      <h3 class="text-center">Ubah Project</h3>
      <form action="{{ route('project.update', $project->id) }}" method="POST">
        @method('put')
        @csrf
        <div class="form-outline mb-4">
          <label class="form-label fw-bold" for="name">Nama Project</label>
          <input type="text" name="name" id="name" class="form-control form-control-lg fs-6 @error('name') is-invalid @enderror" placeholder="Masukkan Nama Project..." required value="{{ old('name', $project->name) }}" />
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-outline mb-4">
          <label class="form-label fw-bold" for="description">Keterangan</label>
          <textarea name="description" id="description" class="form-control form-control-lg fs-6 @error('description') is-invalid @enderror" placeholder="Masukkan Nama Project..." required>{{ old('description', $project->description) }}</textarea>
          @error('description')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>

        <div class="form-outline mb-4">
          <label class="form-label fw-bold" for="status">Status</label>
          <div class="input-group">
            <select class="form-select" name="status" id="status">
              <option value="Planning" {{ old('status', $project->status) == 'Planning' ? 'selected' : '' }}>Planning</option>
              <option value="In Progress" {{ old('status', $project->status) == 'In Progress' ? 'selected' : '' }}>In Progress</option>
              <option value="Completed" {{ old('status', $project->status) == 'Completed' ? 'selected' : '' }}>Completed</option>
            </select>
          </div>
        </div>
    
        <div class="d-grid gap-2 pt-4">
          <button type="submit" class="btn btn-primary btn-lg btn-block">Ubah</button>
          <a href="{{ route('project.index') }}" class="btn btn-outline-dark">Kembali</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
