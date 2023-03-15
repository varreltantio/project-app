<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $this->authorize('view', Project::class);

        return view('project.index', [
            'title' => 'Project',
            'projects' => Project::all(),
        ]);
    }

    public function create()
    {
        $this->authorize('create', Project::class);

        return view('project.create', [
            'title' => 'Tambah Project',
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'status' => 'required'
        ]);

        Project::create($validatedData);

        return redirect('project')->with('success', 'Project berhasil ditambahkan');
    }

    public function show(Project $project)
    {
        $this->authorize('view', $project);

        return view('project.show', [
            'title' => 'Detail Project',
            'project' => $project
        ]);
    }

    public function edit(Project $project)
    {
        $this->authorize('update', $project);

        return view('project.edit', [
            'title' => 'Edit Project',
            'project' => $project
        ]);
    }

    public function update(Request $request, Project $project)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'status' => 'required'
        ]);

        $project->update($validatedData);

        return redirect('project')->with('success', 'Project berhasil diubah');
    }

    public function destroy(Project $project)
    {
        $this->authorize('delete', $project);

        $project->delete();

        return redirect('project')->with('success', 'Project berhasil dihapus');
    }
}
