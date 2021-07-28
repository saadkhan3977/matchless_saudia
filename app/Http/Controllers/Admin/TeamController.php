<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\TeamTitle;
use File;

class TeamController extends Controller
{
    public function index()
    {
        $data = Team::get();
        $teamtitle = TeamTitle::get();
        // print_r(count($teamtitle));die;
        $en = TeamTitle::where('lang','en')->first();
        $ar = TeamTitle::where('lang','ar')->first();
        return view('admin.team.index')
        ->with(compact('data','en','ar','teamtitle'));
    }

    public function create()
    {
        return view('admin.team.add');
    }

    public function store(Request $request)
    {
        $imageName = null;
        if($request->hasFile('image')) 
        {
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/team'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'position' => $request->position,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'linkedin_link' => $request->linkedin_link,
            'lang' => $request->lang,
            'image' => $imageName,
        ];

        Team::create($data);
        return redirect()->to('/admin/team');
    }

    public function show($id)
    {
        $data = Team::find($id);

        return view('admin.team.edit')
        ->with(compact('data'));
    }

    public function update(Request $request,$id)
    {
        $project = Team::find($id);
        $currentimage = $project->image;

        $imageName = null;
        if($request->hasFile('image')) 
        {
            $imagepath = 'uploads/team/'. $project->image;
            File::delete($imagepath);
            
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/team'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'position' => $request->position,
            'facebook_link' => $request->facebook_link,
            'twitter_link' => $request->twitter_link,
            'linkedin_link' => $request->linkedin_link,
            'lang' => $request->lang,
            'image' => ($imageName) ? $imageName : $currentimage,

        ];

        $project->update($data);
        return redirect()->to('/admin/team');
    }

    public function destroy($id)
    {
        $project = Team::find($id);
        $imagepath = 'uploads/team/'. $project->image;
        File::delete($imagepath);
        $project->delete();
        return redirect()->to('/admin/team');
    }
}
