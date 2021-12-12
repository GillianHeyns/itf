<?php

namespace App\Http\Controllers;

use App\Project;
use App\Testimony;
use Illuminate\Http\Request;

class KeuzerichtingAIController extends Controller
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
            ->where('testimony_studierichting', '1 AI')
            ->orWhere('testimony_studierichting', '2 AI')
            ->orWhere('testimony_studierichting', '3 AI')
            ->get();

        return view('opleidingen.bachelor.keuzerichting.ai', ['data' => $data], ['testimonies' => $testimonies]);
    }
}
