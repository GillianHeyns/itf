<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimony;
use Illuminate\Support\Facades\DB;

class TestimoniesController extends Controller
{
    function save(Request $req){
        $req->validate([
            'file'=>'required|image|mimes:jpeg,png,pg,gif,svg|max:2048',
        ]);

        $imageName=time().'.'.$req->file('file')->extension();
        $req->file('file')->move(public_path('uploads/testimonies'),$imageName);

        $testimony = new Testimony();
        $testimony->testimony_studentnaam= $req->naam;
        $testimony->testimony_studierichting= $req->studierichting;
        $testimony->testimony_jaar= $req->jaar;
        $testimony->testimony_tekst= $req->tekst;
        $testimony->file_path='/storage/uploads/testimonies/'.$imageName;
        $testimony->save();

        $projectdata= DB::table('projects')->get();
        return view('admin.content-management',['projectdata'=>$projectdata]);
    }
}
