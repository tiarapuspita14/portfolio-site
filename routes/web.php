<?php

use Illuminate\Support\Facades\Route;
use App\Models\Skill;

use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SkillController;
use App\Models\Projects;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(Projects $projects, Skill $skill){
    return view('Main.main',[
        'project' => Projects::all(),
        'projects' => $projects,
        'name' => $projects->name,
        'desc' => $projects->desc,
        'skill' => $skill,
        'name'=> $skill->name,
        'desc'=> $skill->desc,
        'skills'=> Skill::all()
    ]);
});

// Route::get('/', [SkillController::class, 'index']);
// Route::get('/', [ProjectsController::class, 'index']);



