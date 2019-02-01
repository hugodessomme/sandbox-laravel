<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        return view('projects.index', compact('projects'));

        // SAME AS
        // return view('projects.index', ['projects' => $projects]);
    }

    public function create()
    {
        return view('projects.create');
    }

    /*
     * Route Model Binding
     *
     * @see https://laravel.com/docs/5.7/routing#route-model-binding
     */
    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }
    /*
     * BEFORE refactoring of the above method
     *
     * public function show($id)
     * {
     *     $project = Project::findOrFail($id);
     *
     *     return view('projects.show', compact('projects');
     * }
     */

    public function edit(Project $project) // example.com/projects/1/edit
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        $project->title = request('title');
        $project->description = request('description');

        $project->save();

        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
       $project->delete();

        return redirect('/projects');
    }

    public function store()
    {
        Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);
    }

    /*
     * BEFORE refactoring of the above method
     *
     * public function store()
     * {
     *      $project = new Project();
     *
     *      $project->title = request('title');
     *      $project->description = request('description');
     *
     *      $project->save();
     *
     *      return redirect('/projects');
     * }
     */
}
