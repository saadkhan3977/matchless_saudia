<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectsPageDescription;

class PageTextController extends Controller
{
    public function index()
    {
        $data = ProjectsPageDescription::get();
        return view('admin.project.page_text.index')
        ->with(compact('data'));
    }

    public function create()
    {
        $en = ProjectsPageDescription::where('lang','en')->first();
        $ar = ProjectsPageDescription::where('lang','ar')->first();

        return view('admin.project.page_text.add')
        ->with(compact('en','ar'));
    }

    public function store(Request $request)
    {
        ProjectsPageDescription::create($request->all());
        return redirect()->to('/admin/projects/text');
    }

    public function show($id)
    {
        $data = ProjectsPageDescription::find($id);
        return view('admin.project.page_text.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $data = ProjectsPageDescription::find($id);

        $data->update($request->all());
        return redirect()->to('/admin/projects/text');
    }
}
