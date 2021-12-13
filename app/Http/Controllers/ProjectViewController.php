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
            ->where("projecttag","=",1)
            ->get();

        $dataproject = Project::with(['photos', 'project_tags' => function ($query) {
            $query
                ->join('tags', 'project_tags.tag_id', '=', 'tags.id');
        }])
            ->get();
        return view('projecten', ['tags' => $tags], ['dataproject' => $dataproject]);
    }
}
