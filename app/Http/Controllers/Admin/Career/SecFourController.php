<?php

namespace App\Http\Controllers\Admin\Career;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CareerSecFour;
use App\Models\CareerSecFourHeading;
use File;

class SecFourController extends Controller
{
    public function index()
    {
        $data = CareerSecFour::get();
        $headingdata = CareerSecFourHeading::get();
        $en = CareerSecFourHeading::where('lang','en')->first();
        $ar = CareerSecFourHeading::where('lang','ar')->first();

        return view('admin.career.sec_four.index')
        ->with(compact('data','headingdata','en','ar'));
    }

    public function create()
    {
        $en = CareerSecFour::where('lang','en')->get();
        $ar = CareerSecFour::where('lang','ar')->get();

        return view('admin.career.sec_four.add')
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
            'description' => $request->description,
            'lang' => $request->lang,
            'image' => $imageName,
        ];

        CareerSecFour::create($data);
        return redirect()->to('/admin/career/sec_four');
    }

    public function heading_store(Request $request)
    {

        CareerSecFourHeading::create(request()->all());
        return redirect()->to('/admin/career/sec_four');
    }

    public function heading_update($id , Request $request)
    {
        $data = CareerSecFourHeading::find($id);
        $data->update(request()->all());
        return redirect()->to('/admin/career/sec_four');
    }

    public function show($id)
    {
        $data = CareerSecFour::find($id);
        return view('admin.career.sec_four.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = CareerSecFour::find($id);
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
            'description' => $request->description,
            'lang' => $request->lang,
            'image' => ($imageName) ? $imageName : $currentimage,

        ];

        $project->update($data);
        return redirect()->to('/admin/career/sec_four');
    }

    public function destroy($id)
    {
        $project = CareerSecFour::find($id);
        $imagepath = 'uploads/career/'. $project->image;
        File::delete($imagepath);
        $project->delete();
        return redirect()->to('/admin/career/sec_four');
    }
}
