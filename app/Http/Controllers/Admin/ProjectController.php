<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $project = project::paginate(5);

        return view('admin.posts.index', compact('projects'));
    }

    public function show(Project $project)
    {
        return view('admin.posts.show', compact('project'));
    }
}
