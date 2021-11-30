<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Project;
use App\ProjectTag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    // Master Page: http://itf.test/admin/cms
    public function index()
    {
        $data = DB::table('projects')->get();
        return view('admin.content-management', ['data' => $data]);

        //        return DB::table('projects')->get();
//        return view('admin.content-management');
    }

    function save(Request $req)
    {
        $this->validate($req, [
            'file' => 'required',
            'file.*' => 'mimes:jpeg,jpg,png,gif,svg|max:2048'
        ]);

        $photolink = array();

        $project = new Project;
        $project->titel = $req->titel;
        $project->beschrijving = $req->beschrijving;
        $project->save();
        $projectId = $project->id;

        $teller = 0;
        foreach ($req->file('file') as $file) {
            $teller += 1;
            $imageName = $req->titel . '-' . $teller . '.' . $file->extension();
//            $imageName = time() . '-' . $teller . '.' . $file->extension();
            $file->move(public_path('uploads/projects/' . $projectId . '-' . $req->titel), $imageName);
            $photolink[] = 'uploads/projects/' . $imageName;
        }

        $photo = new Photo;
        $photo->foto_link = json_encode($photolink, JSON_UNESCAPED_SLASHES);
        $photo->project_id = $projectId;
        $photo->save();

        foreach ($req->tags as $tag) {
            //$projectTags[] = $tag;
            $projectTag = new ProjectTag;
            $projectTag->project_id = $projectId;
            $projectTag->tag_id = $tag;
            $projectTag->save();
        }

        $data = DB::table('projects')->get();
        return view('admin.content-management', ['data' => $data]);
    }

    // Detail Page: http://itf.test/admin/cms/{id}
    public function show($id)
    {
//        $project = Project::with('id')->findOrFail($id);
//        $result = compact('project');
//        Json::dump($result);
        return view('admin.edit-project', ['id' => $id]);
    }

    public function edit($id)
    {
//        $project = Project($id);
//        $project->titel = $req->titel;
//        $project->beschrijving = $req->beschrijving;
//        $project->file_path = json_encode($photo, JSON_UNESCAPED_SLASHES);
//        $project->save();
    }

    public function showdelete($id)
    {
        $project = DB::table('projects')->where('id', $id)->get();
        return view('admin.delete-project', ['project' => $project]);
    }

    public function delete($id)
    {
        $project = DB::table('projects')->where('id', $id)->first();
        $titel = $project->titel;

        $dir = public_path('/uploads/projects/'. $id . '-' . $titel);
        if (\File::exists($dir)) {
            \File::deleteDirectory($dir);
            rmdir($dir);
        }

        DB::delete('delete from projects where id = ?', [$id]);
        return redirect('/admin/cms');
    }

    public function showlisttags()
    {
        $tags = DB::table('tags')->get();
        return view('admin.nieuw-project', ['tags' => $tags]);
    }
}
