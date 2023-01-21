<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Revision;
use App\Models\Categories;
use Illuminate\Http\Request;

class RevisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.revision.index', [
            'title' => 'Dashboard Revisions',
            'admrevpend' => Revision::where('status', 'Pending')->get(),
            'admrevprog' => Revision::where('status', 'In Progress')->get(),
            'admrevcomp' => Revision::where('status', 'Complete')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.revision.create', [
            'title' => 'Create Revision Form',
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
            'desc_revision' => 'required',
            'status' => 'required',
            'progress' => 'required',
            'web_dev' => 'required'
        ]);

        Revision::create($validatedData);
        return redirect('/revision')->with('success', 'Revision Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Revision  $revision
     * @return \Illuminate\Http\Response
     */
    public function show(Revision $revision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Revision  $revision
     * @return \Illuminate\Http\Response
     */
    public function edit(Revision $revision)
    {
        return view('dashboard.revision.edit', [
            'title' => 'Revision Edit Form',
            'revision' => $revision,
            'categories' => Categories::all(),
            'webdevinfo' => User::where('role', 'Web Developer')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Revision  $revision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Revision $revision)
    {
        $rules = [
            'user_id' => 'required',
            'category_id' => 'required',
            'name_project' => 'required',
            'desc_revision' => 'required',
            'status' => 'required',
            'progress' => 'required'
        ];

        $validatedData = $request->validate($rules);
        Revision::where('id', $revision->id)
            ->update($validatedData);
        return redirect('/revision')->with('success', 'Revision Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Revision  $revision
     * @return \Illuminate\Http\Response
     */
    public function destroy(Revision $revision)
    {
        Revision::destroy($revision->id);
        return redirect('/revision')->with('success', 'Revision Successfully Deleted');
    }
}
