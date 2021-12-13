<?php

namespace App\Http\Controllers;

use App\Project;
use App\Testimony;
use Illuminate\Http\Request;

class KeuzerichtingCCSController extends Controller
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
                ->join('tags', 'testimony_tags.tag_id', '=', 'tags.id')
                ->where('tag_naam', "CCS");
        }])
            ->get()
            ->where("testimony_tags", "!=", "[]");
        return view('opleidingen.bachelor.keuzerichting.ccs', ['data' => $data], ['testimonies' => $testimonies]);
    }
}
