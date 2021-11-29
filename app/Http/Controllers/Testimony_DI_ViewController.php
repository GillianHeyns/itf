<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Testimony;
use App\Photo;

class Testimony_DI_ViewController extends Controller
{
    public function showTestimonies(){
        $data = DB::table('testimonies')->get();

//        $imagesEnc = DB::table('photos')->get();
//        $images = json_decode($imagesEnc);
        return view('opleidingen.bachelor.keuzerichting.di', ['data' => $data]);
//        return view('projecten', ['data' => $data], ['images'=>$images]);
    }

}
