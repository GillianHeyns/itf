<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimony;
use Illuminate\Support\Facades\DB;
use App\Photo;

class TestimonyController extends Controller
{
    public function index()
    {
        $data= DB::table('testimonies')->get();
        return view('admin.cms-testimonies',['data'=>$data]);
    }

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

        $testimonyId = $testimony->id;

        $photo = new Photo;
        $photo->foto_link='/storage/uploads/testimonies/'.$imageName;
        $photo->foto_beschrijving=$req->foto_beschrijving;
        $photo->testimony_id=$testimonyId;
        $photo->save();

        $data= DB::table('testimonies')->get();
        return view('admin.cms-testimonies',['data'=>$data]);
    }

    public function edit($id)
    {
        $testimony = DB::table('testimonies')->where('id', $id)->get();
//        $testimony = DB::table('testimonies')->where('id', $id)->get();
        return view('admin.edit-getuigenis', ['testimony' => $testimony]);
    }

    public function update(Request $req, $id)
    {
//        $req->validate([
//            'file'=>'required|image|mimes:jpeg,png,pg,gif,svg|max:2048',
//        ]);
//
//        $imageName=time().'.'.$req->file('file')->extension();
//        $req->file('file')->move(public_path('uploads/testimonies'),$imageName);

        $testimony = Testimony::find($id);
        $testimony->testimony_studentnaam= $req->naam;
        $testimony->testimony_studierichting= $req->studierichting;
        $testimony->testimony_jaar= $req->jaar;
        $testimony->testimony_tekst= $req->tekst;
//        $testimony->file_path='/storage/uploads/testimonies/'.$imageName;
        $testimony->save();

//        $testimonyId = $testimony->id;
//
//        $photo = new Photo;
//        $photo->foto_link='/storage/uploads/testimonies/'.$imageName;
//        $photo->foto_beschrijving=$req->foto_beschrijving;
//        $photo->testimony_id=$testimonyId;
//        $photo->save();

        return redirect('/admin/cms-testimonies');
    }

    public function showdelete($id)
    {
        $testimony = DB::table('testimonies')->where('id', $id)->get();
        return view('admin.delete-getuigenis', ['testimony' => $testimony]);
    }

    public function delete($id)
    {
        DB::delete('delete from testimonies where id = ?',[$id]);
        return redirect('/admin/cms-testimonies');
    }
}
