<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeMissionsFeatures;

class MissionsFeaturesController extends Controller
{
    public function index()
    {
        $data = HomeMissionsFeatures::get();

        return view('admin.home.missions_features.index')
        ->with(compact('data'));
    }

    public function create()
    {
        $en = HomeMissionsFeatures::where('lang','en')->get();
        $ar = HomeMissionsFeatures::where('lang','ar')->get();

        return view('admin.home.missions_features.add')
        ->with(compact('en','ar'));
    }

    public function store(Request $request)
    {

        HomeMissionsFeatures::create($request->all());
        return redirect()->to('/admin/home/missions');
    }

    public function show($id)
    {
        $data = HomeMissionsFeatures::find($id);
        return view('admin.home.missions_features.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = HomeMissionsFeatures::find($id);
        $project->update($request->all());
        return redirect()->to('/admin/home/missions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = HomeMissionsFeatures::find($id);
        $project->delete();
        return redirect()->to('/admin/home/missions');
    }
}
