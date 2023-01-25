<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Report;
use App\Models\Project;
use App\Models\Revision;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $devname = auth()->user()->name;
        $status = ['In Progress', 'Complete'];
        return view('dashboard.homepage.index', [
            'title' => 'Home Page',
            'totalproj' => Project::all()->count(),
            'totalrev' => Revision::all()->count(),
            'totalrep' => Report::all()->count(),
            'devtotalproj' => Project::whereIn('status', $status)->where(function ($query) use ($devname) {
                $query->where('web_dev', $devname);
            })->count(),
            'devtotalrev' => Revision::whereIn('status', $status)->where(function ($query) use ($devname) {
                $query->where('web_dev', $devname);
            })->count(),
            'devtotalrep' => Report::whereIn('status', $status)->where(function ($query) use ($devname) {
                $query->where('web_dev', $devname);
            })->count(),
            'totalcate' => Categories::all()->count(),
            'totaladm' => User::where('role', 'Staff Administrator')->count(),
            'totaldev' => User::where('role', 'Web Developer')->count()
        ]);
    }

    function showprojcomp()
    {
        return view('dashboard.show.projectcomp', [
            'projcomps' => Project::where('status', 'Complete')->get()
        ]);
    }

    function showrevcomp()
    {
        return view('dashboard.show.revisioncomp', [
            'revcomps' => Revision::where('status', 'Complete')->get()
        ]);
    }

    function showrepcomp()
    {
        return view('dashboard.show.reportcomp', [
            'repcomps' => Report::where('status', 'Complete')->get()
        ]);
    }
}
