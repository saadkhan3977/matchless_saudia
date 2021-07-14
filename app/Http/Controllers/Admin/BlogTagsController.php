<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogTags;
use Illuminate\Support\Str;

class BlogTagsController extends Controller
{
    public function index()
    {
        $data = BlogTags::get();

        return view('admin.blog.tags.index')
        ->with(compact('data'));
    }

    public function create()
    {
        return view('admin.blog.tags.add');
    }

    public function store(Request $request)
    {
        $data  = BlogTags::where('slug',Str::slug($request->title,'-'))->first();
        if(!$data)
        {
            BlogTags::create([
                'title' => $request->title,
                'lang' => $request->lang,
                'slug' => Str::slug($request->title,'-')
            ]);
            return redirect()->to('/admin/blog_tags');
        }
        else{
            return redirect()->to('/admin/blog_tags')->with('errors','This Tag Already Exists');
        }
    }

    public function show($id)
    {
        $data = BlogTags::find($id);
        return view('admin.blog.tags.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $project = BlogTags::find($id);
        $data  = BlogTags::where('slug',Str::slug($request->title,'-'))->first();
        if(!$data){
            $project->update([
                'title' => $request->title,
                'lang' => $request->lang,
                'slug' => Str::slug($request->title,'-')
            ]);
            return redirect()->to('/admin/blog_tags');
        }
        else{
            return redirect()->to('/admin/blog_tags')->with('errors','This Tag Already Exists');
        }
    }

    public function destroy($id)
    {
        $data = BlogTags::find($id);
        $data->delete();
        return redirect()->to('/admin/blog_tags');
    }
}
