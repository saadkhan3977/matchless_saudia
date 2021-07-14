<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\BlogCategory;
use App\Models\BlogTags;
use Illuminate\Support\Str; 
use File;

class ScheduleController extends Controller
{
    public function index()
    {
        $data = Schedule::get();
        return view('admin.event.index')
        ->with(compact('data'));
    }

    public function create()
    {
        $categories = BlogCategory::get();
        $tags = BlogTags::get();

        return view('admin.event.add')
        ->with(compact('categories','tags'));
    }

    public function store(Request $request)
    {
        $Event = Schedule::where('title',$request->title)->first();
        // print_r($request->feature);die;
        if(!$Event)
        {
            $imageName = null;
            if($request->hasFile('image')) 
            {
                $ifiles = $request->file('image');
                $idestinationPath = 'uploads/event'; // upload path
                $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
                $ifiles->move($idestinationPath, $imageName);
            }
            $data = [
                'category_id' => $request->category_id,
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'feature' => $request->feature,
                'start_date' => $request->start_date,
                'start_time' => $request->start_time,
                'end_date' => $request->end_date,
                'end_time' => $request->end_time,
                'description' => $request->description,
                'image' => $imageName,
                'keyword' => json_encode($request->keyword),
                'content' => $request->content,
                'lang' => $request->lang,
                'company' => $request->company
            ];

            Schedule::create($data);
            return redirect()->to('/admin/schedule');
        }
        return redirect()->back()->with('error',$request->title.' Already Exist');

    }

    public function show($id)
    {

        $categories = BlogCategory::get();
        $data = Schedule::find($id);
        $tags = BlogTags::get();

        return view('admin.event.edit')
        ->with(compact('data','categories','tags'));
    }

    public function Update(Request $request,$id)
    {
        $project = Schedule::find($id);
        $currentimage = $project->image;

        $imageName = null;
        if($request->hasFile('image')) 
        {
            $imagepath = 'uploads/event/'. $project->image;
            File::delete($imagepath);
            
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/event'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'feature' => $request->feature,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'description' => $request->description,
            'image' => ($imageName) ? $imageName : $currentimage,
            'keyword' => json_encode($request->keyword),
            'content' => $request->content,
            'lang' => $request->lang,
            'company' => $request->company
        ];

        $project->update($data);
        return redirect()->to('/admin/schedule');
    }

    public function destroy($id)
    {
        $project = Schedule::find($id);
        $imagepath = 'uploads/event/'. $project->image;
        File::delete($imagepath);
        $project->delete();
        return redirect()->to('/admin/schedule');
    }
}
