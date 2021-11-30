<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use App\Photo;

class ProjectViewController extends Controller
{
    public function showProjecten(){
        $data = DB::table('projects')
            //Inner Join
            ->join('project_tags','projects.id','=','project_tags.project_id')
            ->join('tags','project_tags.project_id','=','tags.id')
            ->get();

//        $data = DB::table('projects')->get();
////        $imagesEnc = DB::table('photos')->get();
////        $images = json_decode($imagesEnc);
        return view('projecten', ['data' => $data]);
    }


    public function innerJoinClause(){
        $projects = DB::table('projects')
            //Inner
            ->join('project_tags','projects.id','=','project_tags.project_id')
            ->join('tags','project_tags.project_id','=','tags.id')
//            ->select('projects.titel','project_tags.project_id')
            ->get();

        //Left-Right
//            ->rightJoin('project_tags', 'projects.id', '=', 'project_tags.project_id')
////            ->select('projects.titel','project_tags.project_id')
//            ->get();
        return $projects;
    }

}
