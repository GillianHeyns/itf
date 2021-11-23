<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    public function index()
    {
        $data= DB::table('tags')->get();
        return view('admin.cms-tags',['data'=>$data]);
    }

    function save(Request $req){
        $tag = new Tag();
        $tag->tag_naam= $req->naam;
        $tag->save();

        $data= DB::table('tags')->get();
        return view('admin.cms-tags',['data'=>$data]);
    }
}
