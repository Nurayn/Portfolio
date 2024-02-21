<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProjectResource;
use App\Http\Resources\SkillResource;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //
    public function welcome()
    {
        $skills = SkillResource::collection(\App\Models\Skill::all());
        $projects = ProjectResource::collection(\App\Models\Project::with('skill')->get());
        return inertia('Welcome', ['skills' => $skills, 'projects' => $projects]);
    }
}
