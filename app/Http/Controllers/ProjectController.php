<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    // Master Page: http://itf.test/admin/cms
    public function index()
    {
        $projectdata= DB::table('projects')->get();
        return view('admin.content-management',['projectdata'=>$projectdata]);

        //        return DB::table('projects')->get();
//        return view('admin.content-management');
    }

    // Detail Page: http://itf.test/admin/cms/{id}
    public function show($id)
    {
//        $project = Project::with('id')->findOrFail($id);
//        $result = compact('project');
//        Json::dump($result);
        return view('project.show', ['id' => $id]);
    }
}
