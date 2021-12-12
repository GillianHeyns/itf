<?php

namespace App\Http\Controllers;

use App\Project;
use App\Testimony;
use DB;
use Illuminate\Http\Request;

class KeuzerichtingDIController extends Controller
{
    public function show()
    {
        $data = Project::with(['photos', 'project_tags' => function ($query) {
            $query
                ->join('tags', 'project_tags.tag_id', '=', 'tags.id');
        }])
            ->get();

        $testimonies = Testimony::with(['photos', 'testimony_tags' => function ($query) {
            $query
                ->join('tags', 'testimony_tags.tag_id', '=', 'tags.id');
        }])
            ->where('testimony_studierichting', '2 DI')
            ->orWhere('testimony_studierichting', '3 DI')
            ->get();

        return view('opleidingen.bachelor.keuzerichting.di', ['data' => $data], ['testimonies' => $testimonies]);
    }
}
