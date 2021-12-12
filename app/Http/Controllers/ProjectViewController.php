<?php

namespace App\Http\Controllers;

use App\Testimony;
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
//        $testimonies = Testimony::with(['photos', 'testimony_tags' => function ($query) {
//            $query
//                ->join('tags', 'testimony_tags.tag_id', '=', 'tags.id');
//        }])
//            ->get();

        $testimonies = Testimony::with(['photos', 'testimony_tags' => function ($query) {
            $query
                ->join('tags', 'testimony_tags.tag_id', '=', 'tags.id')
                ->where('tag_naam', "DI");;
        }])
            ->get();
        return $testimonies;
    }

}
