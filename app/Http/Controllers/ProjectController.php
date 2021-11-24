<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    // Master Page: http://itf.test/admin/cms
    public function index()
    {
        $data = DB::table('projects')->get();
        return view('admin.content-management', ['data' => $data]);

        //        return DB::table('projects')->get();
//        return view('admin.content-management');
    }

    // Detail Page: http://itf.test/admin/cms/{id}
    public function show($id)
    {
//        $project = Project::with('id')->findOrFail($id);
//        $result = compact('project');
//        Json::dump($result);
        return view('admin.edit-project', ['id' => $id]);
    }

    public function showdelete($id)
    {
//        $project = DB::table('projects')->where('id', '1')->first();
        $project = DB::table('users')->where('name', 'John')->pluck('name');
        return view('admin.delete-project', ['project' => $project]);
    }

    public function delete($id)
    {
        $projects = DB::select('SELECT * FROM projects');
        return view('admin.content-management', ['projects' => $projects]);
    }

    function save(Request $req){
        $this->validate($req, [
            'file'=>'required',
            'file.*'=> 'mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $photolink=array();

        foreach ($req->file('file') as $file){
            $imageName = time() . '.' . $file->extension();
            $file->move(public_path('uploads/projects'),$imageName);
            $photolink[]= 'uploads/projects/' . $imageName;
        }

        $project = new Project;
        $project->titel= $req->titel;
        $project->beschrijving= $req->beschrijving;
        //$project->file_path=json_encode($photolink, JSON_UNESCAPED_SLASHES);
        $project->save();
        $projectId = $project->id;

        $photo= new Photo;
        $photo->foto_link=json_encode($photolink, JSON_UNESCAPED_SLASHES);
        $photo->foto_beschrijving=$req->fotobeschrijving;
        $photo->project_id=$projectId;
        $photo->save();

        $data= DB::table('projects')->get();
        return view('admin.content-management',['data'=>$data]);
    }
}
