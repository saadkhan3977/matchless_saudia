<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str; 
use App\Models\Projects;
use File;

class ProjectsController extends Controller
{
    public function index()
    {
    	$data = Projects::orderBy('id','DESC')->get();
    	return view('admin.projects.index')
    	->with(compact('data'));
    }

    public function create()
    {
    	return view('admin.projects.add');
    }

    public function store(Request $request)
    {
    	$videoName = null;
        if($request->hasFile('logo')) 
        {
            $vfiles = $request->file('logo');
            $vdestinationPath = 'uploads/project'; // upload path
            $videoName = date('YmdHis') . "." . $vfiles->getClientOriginalExtension();
            $vfiles->move($vdestinationPath, $videoName);
        }

        $imageName = null;
        if($request->hasFile('image')) 
        {
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/project'; // upload path
            $imageName = date('YmdHis') . "." . rand() . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'category' => $request->category,
            'description' => $request->description,
            'video' => $request->video,
            'website' => $request->website,
            'service_id' => '1',
            'lang' => $request->lang,
            'logo' => $videoName,
            'image' => $imageName,
        ];

        Projects::create($data);
    	return redirect()->to('/admin/projects');
    }

    public function slugcheck(Request $request)
    {
        $data = Projects::where('slug',Str::slug($request->title))->first();
        if($data)
        {
            return response()->json(['data'=>'success']);
        }
        else
        {
            return response()->json(['data'=>'failed']);
        }
    }

    public function editslugcheck(Request $request)
    {
        $data = Projects::where('slug',Str::slug($request->title))->first();
        if($data->id != $request->id)
        {
            return response()->json(['data'=>'success']);
        }
        else
        {
            return response()->json(['data'=>'failed']);
        }
    }

    public function show($id)
    {
    	$data = Projects::find($id);
    	return view('admin.projects.edit')
    	->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
    	$project = Projects::find($id);
    	$currentimage = $project->image;
    	$currentlogo = $project->logo;

    	$videoName = null;
        if($request->hasFile('logo')) 
        {
            $vfiles = $request->file('logo');
            $vdestinationPath = 'uploads/project'; // upload path
            $videoName = date('YmdHis') . "." . $vfiles->getClientOriginalExtension();
            $vfiles->move($vdestinationPath, $videoName);
        }

        $imageName = null;
        if($request->hasFile('image')) 
        {
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/project'; // upload path
            $imageName = date('YmdHis') . "." . rand() . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'category' => $request->category,
            'description' => $request->description,
            'video' => $request->video,
            'website' => $request->website,
            'service_id' => $request->service_id,
            'lang' => $request->lang,
            'logo' => ($videoName) ? $videoName : $currentlogo,
            'image' => ($imageName) ? $imageName : $currentimage,
        ];

    	$project->update($data);
    	return redirect()->to('/admin/projects');
    }

    public function destroy($id)
    {
    	$project = Projects::find($id);
    	$videopath = 'uploads/project/'. $project->logo;
    	$imagepath = 'uploads/project/'. $project->image;
    	File::delete($videopath);
    	File::delete($imagepath);
    	$project->delete();
    	return redirect()->to('/admin/projects');
    }
}
