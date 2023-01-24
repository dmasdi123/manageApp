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
        return view('dashboard.homepage.index', [
            'title' => 'Home Page',
            'totalproj' => Project::all()->count(),
            'totalrev' => Revision::all()->count(),
            'totalrep' => Report::all()->count(),
            'devtotalproj' => Project::where(function ($query) use ($devname) {
                $query->where('web_dev', $devname);
            })->count(),
            'devtotalrev' => Revision::where(function ($query) use ($devname) {
                $query->where('web_dev', $devname);
            })->count(),
            'devtotalrep' => Report::where(function ($query) use ($devname) {
                $query->where('web_dev', $devname);
            })->count(),
            'totalcate' => Categories::all()->count(),
            'totaladm' => User::where('role', 'Staff Administrator')->count(),
            'totaldev' => User::where('role', 'Web Developer')->count()
        ]);
    }
}
