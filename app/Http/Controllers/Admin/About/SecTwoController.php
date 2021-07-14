<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSecTwo;
use File;

class SecTwoController extends Controller
{
    public function index()
    {
        $data = AboutSecTwo::get();
        return view('admin.about.sec_two.index')
        ->with(compact('data'));
    }

    public function create()
    {
        $en = AboutSecTwo::where('lang','en')->get();
        $ar = AboutSecTwo::where('lang','ar')->get();

        return view('admin.about.sec_two.add')
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
            'title' => $request->title,
            'description' => $request->description,
            'lang' => $request->lang,
            'image' => $imageName,
        ];

        AboutSecTwo::create($data);
        return redirect()->to('/admin/about/about_sec_two');
    }

    public function show($id)
    {
        $data = AboutSecTwo::find($id);
        return view('admin.about.sec_two.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = AboutSecTwo::find($id);
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
            'lang' => $request->lang,
            'image' => ($imageName) ? $imageName : $currentimage,

        ];

        $project->update($data);
        return redirect()->to('/admin/about/about_sec_two');
    }

    public function destroy($id)
    {
        $project = AboutSecTwo::find($id);
        $imagepath = 'uploads/about/'. $project->image;
        File::delete($imagepath);
        $project->delete();
        return redirect()->to('/admin/about/about_sec_two');
    }
}
