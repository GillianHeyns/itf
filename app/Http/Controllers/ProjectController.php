<?php

namespace App\Http\Controllers;

use App\Photo;
use App\Project;
use App\ProjectTag;
use App\Testimony;
use App\TestimonyTag;
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
        $photo->foto_beschrijving = $req->fotobeschrijving;
        $photo->project_id = $projectId;
        $photo->save();

        foreach ($req->tags as $tag) {
            //$projectTags[] = $tag;
            $projectTag = new ProjectTag;
            $projectTag->project_id = $projectId;
            $projectTag->tag_id = $tag;
            $projectTag->save();
        }

        return redirect('/admin/cms');
    }

    // Detail Page: http://itf.test/admin/cms/{id}
    public function edit($id)
    {
        $project = Project::with(['photos', 'project_tags' => function ($query) {
            $query
                ->join('tags', 'project_tags.tag_id', '=', 'tags.id');
        }])
            ->where('projects.id', $id)
            ->get();

        $tags = DB::table('tags')
            ->get();

        return view('admin.edit-project', ['project' => $project], ['tags' => $tags]);
    }

    public function update(Request $req, $id)
    {
        if (($req->file) != NULL) {
            $this->validate($req, [
//                'file' => 'required',
                'file.*' => 'required|image|mimes:jpeg,png,pg,gif,svg|max:2048',
            ]);
            $photolink = array();
        }

        //project wijzigen
        $project = Project::find($id);
        //titel niet wijzigen
        //$project->titel = $req->titel;
        $project->beschrijving = $req->beschrijving;
        $projectId = $project->id;
        $project->save();

        //projectnaam ophalen
        $photo = Project::find($projectId);
        $projectnaam = $photo->testimony_studentnaam;

        //nieuwe foto extensie ophalen
        if (($req->file) != NULL) {
            $teller = 0;
            foreach ($req->file('file') as $file) {
                $teller += 1;
                $imageName = $projectnaam . '-' . $teller . '.' . $file->extension();
                $file->move(public_path('uploads/projects/' . $projectId . '-' . $projectnaam), $imageName);
                $photolink[] = 'uploads/projects/' . $imageName;
            }

            $photo = Photo::find($id);
            $photo->foto_link = json_encode($photolink, JSON_UNESCAPED_SLASHES);
            $photo->foto_beschrijving = $req->fotobeschrijving;
            $photo->project_id = $projectId;
            $photo->save();
        }

        //tags wijzigen
        if (($req->tags) != NULL) {
            DB::delete('delete from project_tags where project_id = ?', [$projectId]);

            foreach ($req->tags as $tag) {
                $projectTag = new ProjectTag;
                $projectTag->project_id = $projectId;
                $projectTag->tag_id = $tag;
                $projectTag->save();
            }
        }

        return redirect('/admin/cms');
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

        $dir = public_path('/uploads/projects/' . $id . '-' . $titel);
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
