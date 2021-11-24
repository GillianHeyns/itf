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
        $data= DB::table('projects')->get();
        return view('admin.content-management',['data'=>$data]);

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

    function save(Request $req){
        $this->validate($req, [
            'file'=>'required',
            'file.*'=> 'mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $photo=array();

        foreach ($req->file('file') as $file){
            $imageName = time() . '.' . $file->extension();
            $file->move(public_path('uploads/projects'),$imageName);
            $photo[]= 'uploads/projects/' . $imageName;
        }

        $project = new Project;
        $project->titel= $req->titel;
        $project->beschrijving= $req->beschrijving;
        $project->file_path=json_encode($photo, JSON_UNESCAPED_SLASHES);
        $project->save();

        $data= DB::table('projects')->get();
        return view('admin.content-management',['data'=>$data]);
    }
}
