<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Project;
use App\Models\Categories;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devname = auth()->user()->name;
        return view('dashboard.project.index', [
            'title' => 'Dashboard Projects',
            // 'admprojpend' => Project::where('status', 'Pending')->paginate(2),
            'admprojpend' => Project::where('status', 'Pending')->get(),
            'admprojprog' => Project::where('status', 'In Progress')->get(),
            'admprojcomp' => Project::where('status', 'Complete')->get(),
            'devprojprog' => Project::where('status', 'In Progress')->where(function ($query) use ($devname) {
                $query->where('web_dev', $devname);
            })->get(),
            'devprojcomp' => Project::where('status', 'Complete')->where(function ($query) use ($devname) {
                $query->where('web_dev', $devname);
            })->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.project.create', [
            'title' => 'Create Project Form',
            'categories' => Categories::all(),
            'webdevinfo' => User::where('role', 'Web Developer')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'category_id' => 'required',
            'name_project' => 'required',
            'desc_project' => 'required',
            'status' => 'required',
            'progress' => 'required',
            'web_dev' => 'required'
        ]);

        Project::create($validatedData);
        return redirect('/project')->with('success', 'Project Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('dashboard.project.edit', [
            'title' => 'Project Edit Form',
            'project' => $project,
            'categories' => Categories::all(),
            'webdevinfo' => User::where('role', 'Web Developer')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $rules = [
            'user_id' => 'required',
            'category_id' => 'required',
            'name_project' => 'required',
            'desc_project' => 'required',
            'status' => 'required',
            'progress' => 'required'
        ];

        $validatedData = $request->validate($rules);
        Project::where('id', $project->id)
            ->update($validatedData);
        return redirect('/project')->with('success', 'Project Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        Project::destroy($project->id);
        return redirect('/project')->with('success', 'Project Successfully Deleted');
    }
}
