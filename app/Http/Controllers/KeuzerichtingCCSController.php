<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class KeuzerichtingCCSController extends Controller
{
    public function showTestimonies()
    {
        $testimonies = DB::table('testimonies')->get();

//        $imagesEnc = DB::table('photos')->get();
//        $images = json_decode($imagesEnc);
        return view('opleidingen.bachelor.keuzerichting.di', ['testimonies' => $testimonies]);
//        return view('projecten', ['data' => $data], ['images'=>$images]);
    }

    public function show()
    {
        $data = Project::with(['photos', 'project_tags' => function ($query) {
            $query
                ->join('tags', 'project_tags.tag_id', '=', 'tags.id');
        }])
            ->get();

        return view('opleidingen.bachelor.keuzerichting.ccs', ['data' => $data]);
    }
}
