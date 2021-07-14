<?php

namespace App\Http\Controllers\Admin\About;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutBlog;

class BlogController extends Controller
{
    public function index()
    {
        $headingdata = AboutBlog::get();
        $en = AboutBlog::where('lang','en')->first();
        $ar = AboutBlog::where('lang','ar')->first();

        return view('admin.about.blog.index')
        ->with(compact('headingdata','en','ar'));
    }

    public function create()
    {
        return view('admin.about.blog.add');
    }

    public function store(Request $request)
    {
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'lang' => $request->lang,
        ];
        AboutBlog::create($data);
        return redirect()->to('/admin/about/about_blog');
    }

    public function show($id)
    {
        $data = AboutBlog::find($id);
        return view('admin.about.blog.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $headingdata = AboutBlog::find($id);
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'lang' => $request->lang,
        ];
        $headingdata->update($data);
        return redirect()->to('/admin/about/about_blog');
    }

    public function destroy($id)
    {
        $project = AboutBlog::find($id);
        $project->delete();
        return redirect()->to('/admin/about/about_blog');
    }
}
