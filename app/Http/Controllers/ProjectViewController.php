<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use App\Photo;

class ProjectViewController extends Controller
{
    public function showProjecten()
    {
        $tags = DB::table('tags')
            ->get();

        $dataproject = DB::table('projects')
            ->get();

        $datatag = DB::table('projects')
            //Inner Join
            ->orderBy('titel')
            ->join('project_tags', 'projects.id', '=', 'project_tags.project_id')
            ->join('tags', 'project_tags.project_id', '=', 'tags.id')
            ->get();

//        $data = DB::table('projects')->get();
////        $imagesEnc = DB::table('photos')->get();
////        $images = json_decode($imagesEnc);
        return view('projecten', ['tags' => $tags], ['dataproject' => $dataproject], ['datatag' => $datatag]);
    }


    public function testing()
    {
        $datatag = DB::table('projects')
            //Inner Join
            ->orderBy('titel')
            ->join('project_tags', 'projects.id', '=', 'project_tags.project_id')
            ->join('tags', 'project_tags.project_id', '=', 'tags.id')
            ->get();
        return $datatag;
    }

}
