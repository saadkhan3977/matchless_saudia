<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogTags;
use File;

class BlogController extends Controller
{
    public function index()
    {
        $data = Blog::get();
        return view('admin.blog.post.index')
        ->with(compact('data'));
    }

    public function create()
    {
        $categories = BlogCategory::get();
        $tags = BlogTags::get();
        return view('admin.blog.post.add')
        ->with(compact('categories','tags'));
    }

    public function store(Request $request)
    {
        $blog = Blog::where('title',$request->title)->first();
        // print_r();die;
        if(!$blog)
        {
            $imageName = null;
            if($request->hasFile('image')) 
            {
                $ifiles = $request->file('image');
                $idestinationPath = 'uploads/blog'; // upload path
                $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
                $ifiles->move($idestinationPath, $imageName);
            }

            $bgimageName = null;
            if($request->hasFile('bg_image')) 
            {
                $ifiles = $request->file('bg_image');
                $idestinationPath = 'uploads/blog'; // upload path
                $bgimageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
                $ifiles->move($idestinationPath, $bgimageName);
            }
            $data = [
                'category_id' => $request->category_id,
                'title' => $request->title,
                'feature' => $request->feature,
                'description' => $request->description,
                'image' => $imageName,
                'bg_image' => $bgimageName,
                'keyword' => json_encode($request->keyword),
                'content' => $request->content,
                'lang' => $request->lang,
                'company' => $request->company,
                'event' => $request->event,
                'facebook' => $request->facebook,
                'twitter' => $request->twitter,
                'instagram' => $request->instagram,
                'linkedin' => $request->linkedin
            ];

            Blog::create($data);
            return redirect()->to('/admin/blog');
        }
        return redirect()->back()->with('error',$request->title.' Already Exist');

    }

    public function show($id)
    {
        $categories = BlogCategory::get();
        $data = Blog::find($id);
        $tags = BlogTags::get();

        return view('admin.blog.post.edit')
        ->with(compact('data','categories','tags'));
    }

    public function Update(Request $request,$id)
    {
        $project = Blog::find($id);
        $currentimage = $project->image;
        $bgcurrentimage = $project->bg_image;

        $imageName = null;
        if($request->hasFile('image')) 
        {
            $imagepath = 'uploads/blog/'. $project->image;
            File::delete($imagepath);
            
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/blog'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }


        $bgimageName = null;
        if($request->hasFile('bg_image')) 
        {
            $bgimagepath = 'uploads/blog/'. $project->bg_image;
            File::delete($bgimagepath);
            
            $ifiles = $request->file('bg_image');
            $idestinationPath = 'uploads/blog'; // upload path
            $bgimageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $bgimageName);
        }
        $data = [
            'category_id' => $request->category_id,
            'title' => $request->title,
            'feature' => $request->feature,
            'description' => $request->description,
            'image' => ($imageName) ? $imageName : $currentimage,
            'bg_image' => ($bgimageName) ? $bgimageName : $bgcurrentimage,
            'keyword' => json_encode($request->keyword),
            'content' => $request->content,
            'lang' => $request->lang,
            'company' => $request->company,
            'event' => $request->event,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin
        ];

        $project->update($data);
        return redirect()->to('/admin/blog');
    }

    public function destroy($id)
    {
        $project = Blog::find($id);
        $imagepath = 'uploads/about/'. $project->image;
        File::delete($imagepath);

        $bgimagepath = 'uploads/about/'. $project->bg_image;
        File::delete($bgimagepath);
        $project->delete();
        return redirect()->to('/admin/blog');
    }
}
