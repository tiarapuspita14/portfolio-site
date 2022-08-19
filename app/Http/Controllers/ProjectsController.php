<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Projects;

class ProjectsController extends Controller
{
    public function index(Projects $projects){
        return view('Main.main',[
            'project' => Projects::all(),
            'projects' => $projects,
            'name' => $projects->name,
            'desc' => $projects->desc
        ]);
    }
}
