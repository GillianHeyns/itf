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
        $testimony = Testimony::with(['photos', 'testimony_tags' => function ($query) {
            $query
                ->join('tags', 'testimony_tags.tag_id', '=', 'tags.id');
        }])
            ->where('testimonies.id', $id)
            ->get();

        $tags = DB::table('tags')
            ->get();

        return view('admin.edit-getuigenis', ['testimony' => $testimony], ['tags' => $tags]);
    }

    public function update(Request $req, $id)
    {
        if (($req->file) != NULL) {
            $req->validate([
                'file' => 'required|image|mimes:jpeg,png,pg,gif,svg|max:2048',
            ]);
        }

        //testimony wijzigen
        $testimony = Testimony::find($id);
        //naam niet wijzigen
        //$testimony->testimony_studentnaam = $req->naam;
        $testimony->testimony_studierichting = $req->studierichting;
        $testimony->testimony_jaar = $req->jaar;
        $testimony->testimony_tekst = $req->tekst;
        $testimonyId = $testimony->id;
        $testimony->save();

        //studentennaam ophalen
        $photo = Testimony::find($testimonyId);
        $studentnaam=$photo->testimony_studentnaam;

        //nieuwe foto extensie ophalen
        if (($req->file) != NULL) {
            $file = $req->file('file');
            $extensie =$file->extension();
            $req->file('file')->move(public_path('uploads/testimonies'), $studentnaam.'.'.$extensie);

            $photo = Photo::find($id);
            $photo->foto_beschrijving = $req->foto_beschrijving;
            $photo->foto_link='/uploads/testimonies/'.$studentnaam.'.'.$extensie;
            $photo->testimony_id = $testimonyId;
            $photo->save();
        }

        //tags wijzigen
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
