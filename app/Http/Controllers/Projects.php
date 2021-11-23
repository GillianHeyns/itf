<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;

class Projects extends Controller
{
    function save(Request $req){
        $req->validate([
            'file'=>'required|image|mimes:jpeg,png,pg,gif,svg|max:2048',
        ]);

//        $imageName=time().'.'.$req->file('file')->extension();
//        $req->file('file')->move(public_path('uploads/projects'),$imageName);

        $photo=array();

        foreach ($req->file('file') as $file){
            $imageName = time() . '.' . $file->extension();
            $file->move(public_path('uploads/projects'),$imageName);
            $photo[]=$imageName;
        }

        $project = new Project;
        $project->titel= $req->titel;
        $project->beschrijving= $req->beschrijving;
        //$project->file_path='/storage/uploads/projects/'.$imageName;
        $project->file_path=json_encode($photo);
        $project->save();

        $data= DB::table('projects')->get();
        return view('admin.content-management',['data'=>$data]);
    }


}
