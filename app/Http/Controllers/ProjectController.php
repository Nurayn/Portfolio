<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $projects = ProjectResource::collection(Project::with('skill')->get());
        return Inertia::render('Projects/Index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $skills = Skill::all();
        return Inertia::render('Projects/Create', compact('skills'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|min:3|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'skill_id' => 'required|integer|exists:skills,id',
        ]);

        if ($request->hasFile('image')) {
            if (!Storage::disk('public')->exists('projects')) {
                Storage::makeDirectory('projects');
            }
            $image = $request->file('image')->store('projects');
        }
        Project::create([
            'name' => $request->name,
            'image' => $image,
            'project_url' => $request->project_url,
            'skill_id' => $request->skill_id,
        ]);
        return redirect()->route('projects.index')->with('toast', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $skills = Skill::all();
        return Inertia::render('Projects/Edit', compact('project', 'skills'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        //
        $request->validate([
            'name' => 'required|min:3|max:255',
            'skill_id' => 'required|integer|exists:skills,id',
        ]);

        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if (!Storage::disk('public')->exists('projects')) {
                Storage::makeDirectory('projects');
            }
            if (Storage::disk('public')->exists($project->image)) {
                Storage::disk('public')->delete($project->image);
            }
            $image = $request->file('image')->store('projects');
        }
        $project->update([
            'name' => $request->name,
            'image' => $image ?? $project->image,
            'project_url' => $request->project_url,
            'skill_id' => $request->skill_id,
        ]);
        return redirect()->route('projects.index')->with('toast', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
        if (Storage::disk('public')->exists($project->image)) {
            Storage::disk('public')->delete($project->image);
        }
        $project->delete();
        return redirect()->route('projects.index')->with('toast', 'Project deleted successfully.');
    }
}
