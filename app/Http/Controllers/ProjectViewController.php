<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use App\Photo;

class ProjectViewController extends Controller
{
    public function showProjecten(){
        $data = DB::table('projects')->get();
        $imagesEnc = DB::table('photos')->get();
        $images = json_decode($imagesEnc);
        return view('projecten', ['data' => $data], ['images'=>$images]);
    }

}
