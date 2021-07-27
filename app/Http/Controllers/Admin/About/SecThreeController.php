<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSecThree;
use File;

class SecThreeController extends Controller
{
    public function index()
    {
        $data = AboutSecThree::get();
        return view('admin.about.sec_three.index')
        ->with(compact('data'));
    }

    public function create()
    {
        $en = AboutSecThree::where('lang','en')->first();
        $ar = AboutSecThree::where('lang','ar')->first();

        return view('admin.about.sec_three.add')
        ->with(compact('en','ar'));
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
            'heading' => $request->heading,
            'title' => $request->title,
            'description' => $request->description,
            'sub_title' => $request->sub_title,
            'sub_description' => $request->sub_description,
            'video_url' => $request->video_url,
            'button_text' => $request->button_text,
            'lang' => $request->lang,
            'image' => $imageName,
        ];

        AboutSecThree::create($data);
        return redirect()->to('/admin/about/about_sec_three');
    }

    public function show($id)
    {
        $data = AboutSecThree::find($id);
        return view('admin.about.sec_three.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = AboutSecThree::find($id);
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
            'heading' => $request->heading,
            'title' => $request->title,
            'description' => $request->description,
            'sub_title' => $request->sub_title,
            'sub_description' => $request->sub_description,
            'video_url' => $request->video_url,            
            'button_text' => $request->button_text,
            'image' => ($imageName) ? $imageName : $currentimage,            
            'lang' => $request->lang,
        ];

        $project->update($data);
        return redirect()->to('/admin/about/about_sec_three');
    }

    public function destroy($id)
    {
        $project = AboutSecThree::find($id);
        $imagepath = 'uploads/about/'. $project->image;
        File::delete($imagepath);
        $project->delete();
        return redirect()->to('/admin/about/about_sec_three');
    }
}
