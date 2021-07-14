<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogPage;
use File;

class BlogPageController extends Controller
{
    public function index()
    {
        $headingdata = BlogPage::get();
        $en = BlogPage::where('lang','en')->first();
        $ar = BlogPage::where('lang','ar')->first();

        return view('admin.blog.page_detail.index')
        ->with(compact('headingdata','en','ar'));
    }

    public function create()
    {
        return view('admin.blog.page_detail.add');
    }

    public function store(Request $request)
    {
        $imageName = null;
        if($request->hasFile('image')) 
        {
            $ifiles = $request->file('image');
            $idestinationPath = 'uploads/blog'; // upload path
            $imageName = date('YmdHis') . "." . $ifiles->getClientOriginalExtension();
            $ifiles->move($idestinationPath, $imageName);
        }
        $data = [
            'title' => $request->title,
            'image' => $imageName,
            'lang' => $request->lang,
        ];

        BlogPage::create($data);
        return redirect()->to('/admin/blog_page');
    }

    public function show($id)
    {
        $data = BlogPage::find($id);
        return view('admin.blog.page_detail.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = BlogPage::find($id);
        $currentimage = $project->image;

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
        $data = [
            'title' => $request->title,
            'image' => ($imageName) ? $imageName : $currentimage,
            'lang' => $request->lang,

        ];

        $project->update($data);
        return redirect()->to('/admin/blog_page');
    }

    public function destroy($id)
    {
        $project = BlogPage::find($id);
        $imagepath = 'uploads/about/'. $project->image;
        File::delete($imagepath);
        $project->delete();
        return redirect()->to('/admin/blog_page');
    }
}
