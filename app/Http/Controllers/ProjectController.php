<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'project_link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('project_images', 'public');
            $data['image_path'] = $imagePath;
        }

        Project::create($data);

        return redirect()->route('projects.index')->with('success', 'Proyek berhasil ditambahkan.');
    }

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $data = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'project_link' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            Storage::disk('public')->delete($project->image_path);
            $imagePath = $request->file('image')->store('project_images', 'public');
            $data['image_path'] = $imagePath;
        }

        $project->update($data);

        return redirect()->route('projects.index')->with('success', 'Proyek berhasil diperbarui.');
    }

    public function destroy(Project $project)
    {
        // Tambahkan konfirmasi penghapusan di sini
        return view('projects.confirm', compact('project'));
    }

    public function destroyConfirmed(Project $project)
    {
        Storage::disk('public')->delete($project->image_path);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Proyek berhasil dihapus.');
    }
}
