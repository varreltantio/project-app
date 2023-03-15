@extends('layouts.main')

@section('container')
<div class="container h-100">
  <div class="row d-flex align-items-center justify-content-center">
    <div class="col-md-12 mt-5">
      @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session()->get('success') }}
        </div>
      @endif
      <h3 class="text-center">Daftar Project</h3>
      @can('create', \App\Models\Project::class)
        <a href="{{ route('project.create') }}" class="btn btn-primary">Tambah</a>
      @endcan
      <form action="{{ route('logout') }}" method="POST" class="d-inline">
        @csrf
        <button type="submit" class="btn btn-danger">Logout</button>
      </form>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Project</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($projects as $project)
          <tr>
            <th scope="row">{{ $loop->index + 1 }}</th>
            <td>{{ $project->name }}</td>
            <td>{{ $project->status }}</td>
            <td>         
              <a href="{{ route('project.show', $project->id) }}" class="btn btn-sm btn-primary">
                <i class="fa-solid fa-eye"></i>
              </a>
              @can('update', $project)
                <a href="{{ route('project.edit', $project->id) }}" class="btn btn-sm btn-warning">
                  <i class="fa-solid fa-pencil"></i>
                </a>
              @endcan
              @can('delete', $project)
                <form action="{{ route('project.destroy', $project->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')"><i class="fa-solid fa-trash"></i></button>
                </form>
              @endcan
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection


