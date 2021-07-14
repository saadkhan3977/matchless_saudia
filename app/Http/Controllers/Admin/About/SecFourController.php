<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSecFourHeading;
use App\Models\AboutSecFourSlider;
use File;

class SecFourController extends Controller
{
    public function index()
    {
        $headingdata = AboutSecFourHeading::get();
        $en = AboutSecFourHeading::where('lang','en')->first();
        $ar = AboutSecFourHeading::where('lang','ar')->first();

        return view('admin.about.sec_four.index')
        ->with(compact('headingdata','en','ar'));
    }

    public function create()
    {

        return view('admin.about.sec_four.add');
    }

    public function heading(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'lang' => $request->lang,
        ];
        AboutSecFourHeading::create($data);
        return redirect()->to('/admin/about/about_sec_four');
    }

    public function heading_update($id,Request $request)
    {
        $headingdata = AboutSecFourHeading::find($id);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'lang' => $request->lang,
        ];
        $headingdata->update($data);
        return redirect()->to('/admin/about/about_sec_four');
    }

    public function heading_delete($id)
    {
        $project = AboutSecFourHeading::find($id);
        $project->delete();
        return redirect()->to('/admin/about/about_sec_four');
    }

    public function store(Request $request)
    {
        $imageName = null;
        if($request->hasFile('image')) 
        {
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/about'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imageName,
        ];

        AboutSecFourHeading::create($data);
        return redirect()->to('/admin/about/about_sec_four');
    }

    public function show($id)
    {
        $data = AboutSecFourHeading::find($id);
        return view('admin.about.sec_four.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = AboutSecFourHeading::find($id);
        $currentimage = $project->image;

        $imageName = null;
        if($request->hasFile('image')) 
        {
            $imagepath = 'uploads/about/'. $project->image;
            File::delete($imagepath);
            
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/about'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'image' => ($imageName) ? $imageName : $currentimage,

        ];

        $project->update($data);
        return redirect()->to('/admin/about/about_sec_four');
    }

    public function destroy($id)
    {
        $project = AboutSecFourHeading::find($id);
        $imagepath = 'uploads/about/'. $project->image;
        File::delete($imagepath);
        $project->delete();
        return redirect()->to('/admin/about/about_sec_four');
    }
}
