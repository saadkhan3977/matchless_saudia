<?php

namespace App\Http\Controllers\Admin\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeHospitalityConsultancy;
use App\Models\HomeSecTwo;
use File;

class HospitalityConsultancyController extends Controller
{
    public function index()
    {
        $data = HomeHospitalityConsultancy::get();
        $sectwo = HomeSecTwo::get();
        
        return view('admin.home.hospitality_consultancy.index')
        ->with(compact('data','sectwo'));
    }

    public function create()
    {
        $en = HomeHospitalityConsultancy::where('lang','en')->first();
        $ar = HomeHospitalityConsultancy::where('lang','ar')->first();

        return view('admin.home.hospitality_consultancy.add')
        ->with(compact('en','ar'));
    }

    public function sectwo_create()
    {
        $en = HomeSecTwo::where('lang','en')->get();
        $ar = HomeSecTwo::where('lang','ar')->get();

        return view('admin.home.hospitality_consultancy.sectwo-add')
        ->with(compact('en','ar'));
    }

    public function store(Request $request)
    {

        HomeHospitalityConsultancy::create($request->all());
        return redirect()->to('/admin/home/hospitality_consultancy');
    }

    public function sectwo_store(Request $request)
    {
        // HomeVideo::create($request->all());
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
            'image' => $fileName,
            'video' => $request->video,
            'lang' => $request->lang,
        ];

        HomeSecTwo::create($data);
        return redirect()->to('/admin/home/hospitality_consultancy/');
    }

    public function sectwo_edit($id)
    {
        $data = HomeSecTwo::find($id);

        return view('admin.home.hospitality_consultancy.sectwo-edit')
        ->with(compact('data'));
    }

    public function sectwo_update(Request $request, $id)
    {
        $homvideo = HomeSecTwo::find($id);
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
            'video' => $request->video,
        ];

        $homvideo->update($data);
        return redirect()->to('/admin/home/hospitality_consultancy/');
        
    }
    public function sectwo_delete($id)
    {
        $homvideo = HomeSecTwo::find($id);
        $currentImage = $homvideo->image;
        File::delete('/uploads/home/'.$currentImage);
        $homvideo->delete();
        return redirect()->to('/admin/home/hospitality_consultancy');
    }

    public function show($id)
    {
        $data = HomeHospitalityConsultancy::find($id);

        return view('admin.home.hospitality_consultancy.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = HomeHospitalityConsultancy::find($id);
        $project->update($request->all());
        return redirect()->to('/admin/home/hospitality_consultancy');
    }

    public function destroy($id)
    {
        $project = HomeHospitalityConsultancy::find($id);
        $project->delete();
        return redirect()->to('/admin/home/hospitality_consultancy');
    }
}
