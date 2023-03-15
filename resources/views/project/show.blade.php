@extends('layouts.main')

@section('container')
<div class="container h-100">
  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-md-12 mt-5">
      <div class="card">
        <div class="card-header">
          Detail Project
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $project->name }}</h5>
          <p class="card-text">{{ $project->description }}</p>
          @php
            $colorClass = '';

            switch($project->status) {
              case 'Planning':
                $colorClass = 'bg-primary';
                break;
              case 'In Progress':
                $colorClass = 'bg-warning';
                break;
              case 'Completed':
                $colorClass = 'bg-success';
                break;
            }
          @endphp

          <div class="mb-3">
            <span class="badge {{ $colorClass }}">{{ $project->status }}</span>
          </div>
          <a href="{{ route('project.index') }}" class="btn btn-outline-dark">Kembali</a>
          @can('update', $project)
          <a href="{{ route('project.edit', $project->id) }}" class="btn btn-warning">
            Ubah
          </a>
          @endcan
          @can('delete', $project)
            <form action="{{ route('project.destroy', $project->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin?')">Hapus</button>
            </form>
          @endcan
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
