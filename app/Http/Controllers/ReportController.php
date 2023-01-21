<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;
use App\Models\Categories;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $devname = auth()->user()->name;
        return view('dashboard.report.index', [
            'title' => 'Dashboard Reports',
            'admreppend' => Report::where('status', 'Pending')->get(),
            'admrepprog' => Report::where('status', 'In Progress')->get(),
            'admrepcomp' => Report::where('status', 'Complete')->get(),
            'devrepprog' => Report::where('status', 'In Progress')->where(function ($query) use ($devname) {
                $query->where('web_dev', $devname);
            })->get(),
            'devrepcomp' => Report::where('status', 'Complete')->where(function ($query) use ($devname) {
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
        return view('dashboard.report.create', [
            'title' => 'Create Report Form',
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
            'desc_report' => 'required',
            'status' => 'required',
            'progress' => 'required',
            'web_dev' => 'required'
        ]);

        Report::create($validatedData);
        return redirect('/report')->with('success', 'Report Successfully Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        return view('dashboard.report.edit', [
            'title' => 'Report Edit Form',
            'report' => $report,
            'categories' => Categories::all(),
            'webdevinfo' => User::where('role', 'Web Developer')->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $rules = [
            'user_id' => 'required',
            'category_id' => 'required',
            'name_project' => 'required',
            'desc_report' => 'required',
            'status' => 'required',
            'progress' => 'required'
        ];

        $validatedData = $request->validate($rules);
        Report::where('id', $report->id)
            ->update($validatedData);
        return redirect('/report')->with('success', 'Report Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        Report::destroy($report->id);
        return redirect('/report')->with('success', 'Report Successfully Deleted');
    }
}
