<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index(Skill $skill){
        return view('Main.main',[
            'skill' => $skill,
            'name'=> $skill->name,
            'desc'=> $skill->desc,
            'skills'=> Skill::all()
        ]);
    }
}
