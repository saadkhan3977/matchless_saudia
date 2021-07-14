<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeMissions;
use App\Models\HomeMissionsFeatures;

class MissionsController extends Controller
{
    public function index()
    {
        $data = HomeMissions::get();
        $featuredata = HomeMissionsFeatures::get();

        return view('admin.home.missions.index')
        ->with(compact('data','featuredata'));
    }

    public function create()
    {
        $en = HomeMissions::where('lang','en')->first();
        $ar = HomeMissions::where('lang','ar')->first();

        return view('admin.home.missions.add')
        ->with(compact('en','ar'));
    }

    public function store(Request $request)
    {

        HomeMissions::create($request->all());
        return redirect()->to('/admin/home/missions');
    }

    public function show($id)
    {
        $data = HomeMissions::find($id);
        return view('admin.home.missions.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = HomeMissions::find($id);
        $project->update($request->all());
        return redirect()->to('/admin/home/missions');
    }

    public function destroy($id)
    {
        $project = HomeMissions::find($id);
        $project->delete();
        return redirect()->to('/admin/home/missions');
    }
}
