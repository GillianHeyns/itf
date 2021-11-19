<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class Projects extends Controller
{
    function save(Request $req){
        $project = new Project;
        $project->titel= $req->titel;
        $project->beschrijving= $req->beschrijving;
        $project->save();
    }
}
