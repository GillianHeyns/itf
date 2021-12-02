<?php

namespace App\Http\Controllers;

use App\TestimonyTag;
use Illuminate\Http\Request;
use App\Testimony;
use Illuminate\Support\Facades\DB;
use App\Photo;

class TestimonyController extends Controller
{
    public function index()
    {
        $data = DB::table('testimonies')->get();
        return view('admin.cms-testimonies', ['data' => $data]);
    }

    function save(Request $req)
    {
        $req->validate([
            'file' => 'required|image|mimes:jpeg,png,pg,gif,svg|max:2048',
        ]);

        $imageName = $req->naam . '.' . $req->file('file')->extension();
        $req->file('file')->move(public_path('uploads/testimonies'), $imageName);

        $testimony = new Testimony();
        $testimony->testimony_studentnaam = $req->naam;
        $testimony->testimony_studierichting = $req->studierichting;
        $testimony->testimony_jaar = $req->jaar;
        $testimony->testimony_tekst = $req->tekst;
        $testimony->file_path = '/uploads/testimonies/' . $imageName;
        $testimony->save();
        $testimonyId = $testimony->id;

        $photo = new Photo;
        $photo->foto_link = '/uploads/testimonies/' . $imageName;
        $photo->foto_beschrijving = $req->foto_beschrijving;
        $photo->testimony_id = $testimonyId;
        $photo->save();


        foreach ($req->tags as $tag) {
            $testimonyTag = new TestimonyTag;
            $testimonyTag->testimony_id = $testimonyId;
            $testimonyTag->tag_id = $tag;
            $testimonyTag->save();
        }

        return redirect('/admin/cms-testimonies');
    }

    public function edit($id)
    {
        $testimony = DB::table('testimonies')
            ->where('testimonies.id', $id)
            ->join('photos', 'testimonies.id', '=', 'photos.testimony_id')
//            ->join('testimony_tags', 'testimonies.id', '=', 'testimony_tags.testimony_id')
            ->get();

        $tags = DB::table('tags')
            ->get();

//        return $testimony;
        return view('admin.edit-getuigenis', ['testimony' => $testimony], ['tags' => $tags]);
    }

    public function update(Request $req, $id)
    {
        $testimony = Testimony::find($id);
//        $testimony->testimony_studentnaam = $req->naam;
        $testimony->testimony_studierichting = $req->studierichting;
        $testimony->testimony_jaar = $req->jaar;
        $testimony->testimony_tekst = $req->tekst;
        $testimonyId = $testimony->id;
        $testimony->save();

//        if (($req->file) != NULL) {
//            $testimony = DB::table('testimonies')->where('id', $id)->first();
//            $file_path = $testimony->file_path;
//
//            if (\File::exists(public_path($file_path))) {
//                \File::delete(public_path($file_path));
//            }
//
//        }

        if (($req->tags) != NULL) {
            DB::delete('delete from testimony_tags where testimony_id = ?', [$testimonyId]);

            foreach ($req->tags as $tag) {
                $testimonyTag = new TestimonyTag;
                $testimonyTag->testimony_id = $testimonyId;
                $testimonyTag->tag_id = $tag;
                $testimonyTag->save();
            }
        }

        return redirect('/admin/cms-testimonies');
    }

    public function showdelete($id)
    {
        $testimony = DB::table('testimonies')->where('id', $id)->get();
        return view('admin.delete-getuigenis', ['testimony' => $testimony]);
    }

    public function delete($id)
    {
        $testimony = DB::table('testimonies')->where('id', $id)->first();
        $file_path = $testimony->file_path;

        if (\File::exists(public_path($file_path))) {
            \File::delete(public_path($file_path));
        }
        DB::delete('delete from testimonies where id = ?', [$id]);
        return redirect('/admin/cms-testimonies');
    }

    public function showlisttags()
    {
        $tags = DB::table('tags')->get();
        return view('admin.nieuw-getuigenis', ['tags' => $tags]);
    }
}
