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

        $imageName = null;
        if($request->hasFile('image')) 
        {
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/home'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'lang' => $request->lang,
            'description' => $request->description,
            'image' => $imageName,
        ];

        HomeMissionsFeatures::create($data);
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
        $homvideo = HomeMissionsFeatures::find($id);
        // $project->update($request->all());
        $currentImage = $homvideo->image;
        $fileName = null;
        if($request->hasFile('image')) 
        {
            $files = $request->file('image');
            $destinationPath = 'uploads/home'; // upload path
            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $fileName);
        }
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => ($fileName) ? $fileName : $currentImage ,
            'lang' => $request->lang,
        ];

        $homvideo->update($data);
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
