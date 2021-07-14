<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeProjects;

class ProjectsController extends Controller
{
    public function index()
    {
        $data = HomeProjects::get();

        return view('admin.home.projects.index')
        ->with(compact('data'));
    }

    public function create()
    {
        $en = HomeProjects::where('lang','en')->first();
        $ar = HomeProjects::where('lang','ar')->first();

        return view('admin.home.projects.add')
        ->with(compact('en','ar'));
    }

    public function store(Request $request)
    {

        HomeProjects::create($request->all());
        return redirect()->to('/admin/home/projects');
    }

    public function show($id)
    {
        $data = HomeProjects::find($id);
        return view('admin.home.projects.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = HomeProjects::find($id);
        $project->update($request->all());
        return redirect()->to('/admin/home/projects');
    }

    public function destroy($id)
    {
        $project = HomeProjects::find($id);
        $project->delete();
        return redirect()->to('/admin/home/projects');
    }

}
