<?php

namespace App\Http\Controllers;

use App\Http\Resources\SkillResource;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills = SkillResource::collection(Skill::all());
        return Inertia::render('Skills/Index', compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return Inertia::render('Skills/Create');
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
        ]);

        if ($request->hasFile('image')) {
            if (!Storage::disk('public')->exists('skills')) {
                Storage::makeDirectory('skills');
            }
            $image = $request->file('image')->store('skills');
        }
        Skill::create([
            'name' => $request->name,
            'image' => $image,
        ]);
        return redirect()->route('skills.index')->with('toast', 'Skill created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Skill $skill)
    {
        //
        return Inertia::render('Skills/Edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Skill $skill)
    {
        //
        $request->validate([
            'name' => 'required|min:3|max:255'
        ]);
        $image = $skill->image;
        if ($request->hasFile('image')) {
            $request->validate([
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);
            if (!Storage::disk('public')->exists('skills')) {
                Storage::makeDirectory('skills');
            }
            if (Storage::disk('public')->exists($skill->image)) {
                Storage::disk('public')->delete($skill->image);
            }
            $image = $request->file('image')->store('skills');
        }
        $skill->update([
            'name' => $request->name,
            'image' => $image,
        ]);
        return redirect()->route('skills.index')->with('toast', 'Skill updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Skill $skill)
    {
        //
        if (Storage::disk('public')->exists($skill->image)) {
            Storage::disk('public')->delete($skill->image);
        }
        $skill->delete();
        return redirect()->route('skills.index')->with('toast', 'Skill deleted successfully.');
    }
}
