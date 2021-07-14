<?php

namespace App\Http\Controllers\Admin\Career;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CareerSecTwo;
use App\Models\CareerSecTwoHeading;
use File;

class SecTwoController extends Controller
{
    public function index()
    {
        $data = CareerSecTwo::get();
        $headingdata = CareerSecTwoHeading::get();
        $en = CareerSecTwoHeading::where('lang','en')->first();
        $ar = CareerSecTwoHeading::where('lang','ar')->first();

        return view('admin.career.sec_two.index')
        ->with(compact('data','headingdata','en','ar'));
    }

    public function create()
    {
        $en = CareerSecTwo::where('lang','en')->get();
        $ar = CareerSecTwo::where('lang','ar')->get();

        return view('admin.career.sec_two.add')
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

        CareerSecTwo::create($data);
        return redirect()->to('/admin/career/sec_two');
    }

    public function heading_store(Request $request)
    {

        CareerSecTwoHeading::create(request()->all());
        return redirect()->to('/admin/career/sec_two');
    }

    public function heading_update($id , Request $request)
    {
        $data = CareerSecTwoHeading::find($id);
        $data->update(request()->all());
        return redirect()->to('/admin/career/sec_two');
    }

    public function heading_destroy($id)
    {
        $project = CareerSecTwoHeading::find($id);
        $project->delete();
        return redirect()->to('/admin/career/sec_two');
    }

    public function show($id)
    {
        $data = CareerSecTwo::find($id);

        return view('admin.career.sec_two.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = CareerSecTwo::find($id);
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
            'image' => ($imageName) ? $imageName : $currentimage,

        ];

        $project->update($data);
        return redirect()->to('/admin/career/sec_two');
    }

    public function destroy($id)
    {
        $project = CareerSecTwo::find($id);
        $imagepath = 'uploads/career/'. $project->image;
        File::delete($imagepath);
        $project->delete();
        return redirect()->to('/admin/career/sec_two');
    }
}
