<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Project;
use function Doctrine\Common\Cache\Psr6\get;

class ProjectViewController extends Controller
{
    public function showProjecten()
    {
        $tags = DB::table('tags')
            ->get();

        $dataproject = Project::with(['photos', 'project_tags' => function ($query) {
            $query
                ->join('tags', 'project_tags.tag_id', '=', 'tags.id');
        }])
            ->get();

//        $data = DB::table('projects')->get();
////        $imagesEnc = DB::table('photos')->get();
////        $images = json_decode($imagesEnc);
        return view('projecten', ['tags' => $tags], ['dataproject' => $dataproject]);
    }


    public function testing()
    {
        $projects = Project::with(['photos', 'project_tags' => function ($query) {
            $query
                ->join('tags', 'project_tags.tag_id', '=', 'tags.id');
        }])
            ->get();

//        $projects = Project::with(['photos', 'project_tags' => function ($query) {
//            $query
////                ->select(['id', 'project_id', 'tag_id'])
//                ->join('tags', 'project_tags.tag_id', '=', 'tags.id');
////                ->on('tags.id', '=', 'project_tags.tag_id');
//        }])
//            ->get();

        return $projects;
    }

}
