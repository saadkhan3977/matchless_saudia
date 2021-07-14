<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSecOne;
use File;

class SecOneController extends Controller
{
    public function index()
    {
        $data = AboutSecOne::get();
        return view('admin.about.sec_one.index')
        ->with(compact('data'));
    }

    public function create()
    {
        return view('admin.about.sec_one.add');
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
            'link' => $request->link,
            'link_text' => $request->link_text,
            'lang' => $request->lang,
            'description' => $request->description,
            'image' => $imageName,
        ];

        AboutSecOne::create($data);
        return redirect()->to('/admin/about/about_sec_one');
    }

    public function show($id)
    {
        $data = AboutSecOne::find($id);

        return view('admin.about.sec_one.edit')
        ->with(compact('data'));
    }

    public function update(Request $request,$id)
    {
        $project = AboutSecOne::find($id);
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
            'link' => $request->link,
            'link_text' => $request->link_text,
            'lang' => $request->lang,
            'description' => $request->description,
            'image' => ($imageName) ? $imageName : $currentimage,

        ];

        $project->update($data);
        return redirect()->to('/admin/about/about_sec_one');
    }

    public function destroy($id)
    {
        $project = AboutSecOne::find($id);
        $imagepath = 'uploads/about/'. $project->image;
        File::delete($imagepath);
        $project->delete();
        return redirect()->to('/admin/about/about_sec_one');
    }
}
