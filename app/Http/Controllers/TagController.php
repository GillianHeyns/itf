<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Illuminate\Support\Facades\DB;

class TagController extends Controller
{
    public function index()
    {
        $data = DB::table('tags')->get();
        return view('admin.cms-tags', ['data' => $data]);
    }

    function save(Request $req)
    {
        $tag = new Tag();
        $tag->tag_naam = $req->naam;
        $tag->save();

        $data = DB::table('tags')->get();
        return view('admin.cms-tags', ['data' => $data]);
    }

    public function edit($id)
    {
        $tag = DB::table('tags')->where('id', $id)->get();
        return view('admin.edit-tag', ['tag' => $tag]);
    }

    public function update(Request $req, $id)
    {
        $tag = Tag::find($id);
        $tag->tag_naam = $req->naam;
        $tag->save();

        $data = DB::table('tags')->get();
        return view('admin.cms-tags', ['data' => $data]);
    }

    public function showdelete($id)
    {
        $tag = DB::table('tags')->where('id', $id)->get();
        return view('admin.delete-tag', ['tag' => $tag]);
    }

    public function delete($id)
    {
        DB::delete('delete from tags where id = ?', [$id]);
        return redirect('/admin/cms-tags');
    }

}
