<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use Illuminate\Support\Facades\DB;

class Projects extends Controller
{
    function save(Request $req){
        $this->validate($req, [
            'file'=>'required',
            'file.*'=> 'mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

//        $imageName=time().'.'.$req->file('file')->extension();
//        $req->file('file')->move(public_path('uploads/projects'),$imageName);

        $photo=array();

        //dd($req->file('file'));
        foreach ($req->file('file') as $file){
            $imageName = time() . '.' . $file->extension();
            $file->move(public_path('uploads/projects'),$imageName);
            $photo[]= 'uploads/projects/' . $imageName;
        }

        $project = new Project;
        $project->titel= $req->titel;
        $project->beschrijving= $req->beschrijving;
        //$project->file_path='/storage/uploads/projects/'.$imageName;
        $project->file_path=json_encode($photo, JSON_UNESCAPED_SLASHES);
        $project->save();

        $data= DB::table('projects')->get();
        return view('admin.content-management',['data'=>$data]);
    }


}
