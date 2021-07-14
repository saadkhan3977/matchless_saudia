<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogCategory;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    public function index()
    {
        $categories = BlogCategory::get();
        return view('admin.blog.category.index')
        ->with(compact('categories'));
    }

    public function create()
    {
        return view('admin.blog.category.add');
    }

    public function store(Request $request)
    {
        // print_r(Str::slug($request->title));die;
        $blog = BlogCategory::where('slug',Str::slug($request->title))->first();
        if(!$blog){
            $data = [
                'title' => $request->title,
                'slug' => Str::slug($request->title),
                'lang' => $request->lang,
            ];
            BlogCategory::create($data);
        return redirect()->to('/admin/blog_category');
        }
        return redirect()->back()->with('error' , $request->title.' Already Available Our Recored');

    }

    public function show($id)
    {
        $data = BlogCategory::find($id);
        return view('admin.blog.category.edit')
        ->with(compact('data'));
    }

    public function Update(Request $request,$id)
    {
        $headingdata = BlogCategory::find($id);
        $data = [
            'title' => $request->title,
            'slug' => Str::slug($request->title),
                'lang' => $request->lang,
        ];
        $headingdata->update($data);
        return redirect()->to('/admin/blog_category');
    }

    public function destroy($id)
    {
        $project = BlogCategory::find($id);
        $project->delete();
        return redirect()->to('/admin/blog_category');
    }
}
