<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimony;

class TestimoniesController extends Controller
{
    function save(Request $req){
        $testimony = new Testimony();
        $testimony->testimony_studentnaam= $req->naam;
        $testimony->testimony_studierichting= $req->studierichting;
        $testimony->testimony_jaar= $req->jaar;
        $testimony->testimony_tekst= $req->tekst;
        $testimony->save();
    }
}
