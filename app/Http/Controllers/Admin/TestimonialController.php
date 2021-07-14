<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use File;

class TestimonialController extends Controller
{
    public function index()
    {
        $data = Testimonial::get();
        return view('admin.testimonial.index')
        ->with(compact('data'));
    }

    public function create()
    {
        return view('admin.testimonial.add');
    }

    public function store(Request $request)
    {
        $imageName = null;
        if($request->hasFile('image')) 
        {
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/testimonial'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'client_name' => $request->client_name,
            'description' => $request->description,
            'lang' => $request->lang,
            'image' => $imageName,
        ];

        Testimonial::create($data);
        return redirect()->to('/admin/testimonial');
    }

    public function show($id)
    {
        $data = Testimonial::find($id);
        return view('admin.testimonial.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = Testimonial::find($id);
        $currentimage = $project->image;

        $imageName = null;
        if($request->hasFile('image')) 
        {
            $imagepath = 'uploads/testimonial/'. $project->image;
            File::delete($imagepath);
            
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/testimonial'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'client_name' => $request->client_name,
            'lang' => $request->lang,
            'description' => $request->description,
            'image' => ($imageName) ? $imageName : $currentimage,

        ];

        $project->update($data);
        return redirect()->to('/admin/testimonial');
    }

    public function destroy($id)
    {
        $project = Testimonial::find($id);
        $imagepath = 'uploads/testimonial/'. $project->image;
        File::delete($imagepath);
        $project->delete();
        return redirect()->to('/admin/testimonial');
    }
}
