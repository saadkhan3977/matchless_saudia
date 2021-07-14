<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSecSix;
use File;

class SecSixController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = AboutSecSix::get();
        return view('admin.about.sec_six.index')
        ->with(compact('data'));
    }

    public function create()
    {
        $en = AboutSecSix::where('lang','en')->first();
        $ar = AboutSecSix::where('lang','ar')->first();

        return view('admin.about.sec_six.add')
        ->with(compact('en','ar'));
    }

    public function store(Request $request)
    {
        $imageName = null;
        if($request->hasFile('image')) 
        {
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/about/'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'sub_title' => $request->sub_title,
            'sub_description' => $request->sub_description,
            'image' => $imageName,
            'lang' => $request->lang,
        ];

        AboutSecSix::create($data);
        return redirect()->to('/admin/about/about_sec_six');
    }

    public function show($id)
    {
        $data = AboutSecSix::find($id);
        return view('admin.about.sec_six.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = AboutSecSix::find($id);
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
            'image' => ($imageName) ? $imageName : $project->image,
            'lang' => $request->lang,
        ];

        $project->update($data);
        return redirect()->to('/admin/about/about_sec_six');
    }

    public function destroy($id)
    {
        $project = AboutSecSix::find($id);
        $imagepath = 'uploads/about/'. $project->image;
        File::delete($imagepath);
        $project->delete();
        return redirect()->to('/admin/about/about_sec_six');
    }
}
