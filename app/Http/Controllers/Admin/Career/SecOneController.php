<?php

namespace App\Http\Controllers\Admin\Career;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CareerSecOne;
use File;

class SecOneController extends Controller
{
    public function index()
    {
        $data = CareerSecOne::get();
        return view('admin.career.sec_one.index')
        ->with(compact('data'));
    }

    public function create()
    {
        $en = CareerSecOne::where('lang','en')->first();
        $ar = CareerSecOne::where('lang','ar')->first();

        return view('admin.career.sec_one.add')
        ->with(compact('en','ar'));
    }

    public function store(Request $request)
    {
        $imageName = null;
        if($request->hasFile('image')) 
        {
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/career'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'description' => $request->description,
            'lang' => $request->lang,
            'image' => $imageName,
        ];

        CareerSecOne::create($data);
        return redirect()->to('/admin/career/sec_one');
    }

    public function show($id)
    {
        $data = CareerSecOne::find($id);
        return view('admin.career.sec_one.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = CareerSecOne::find($id);
        $currentimage = $project->image;

        $imageName = null;
        if($request->hasFile('image')) 
        {
            $imagepath = 'uploads/career/'. $project->image;
            File::delete($imagepath);
            
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/career'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'sub_title' => $request->sub_title,
            'lang' => $request->lang,
            'description' => $request->description,
            'image' => ($imageName) ? $imageName : $currentimage,

        ];

        $project->update($data);
        return redirect()->to('/admin/career/sec_one');
    }

    public function destroy($id)
    {
        $project = CareerSecOne::find($id);
        $imagepath = 'uploads/career/'. $project->image;
        File::delete($imagepath);
        $project->delete();
        return redirect()->to('/admin/career/sec_one');
    }
}
