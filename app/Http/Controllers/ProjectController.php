<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Master Page: http://itf.test/admin/cms
    public function index()
    {
        return view('admin.content-management');
    }

    // Detail Page: http://itf.test/admin/cms/{id}
    public function show($id)
    {
        return view('project.show', ['id' => $id]);
    }
}
