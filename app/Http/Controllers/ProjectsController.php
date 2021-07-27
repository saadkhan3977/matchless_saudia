<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectsPageDescription;
use App\Models\Projects;
use App\Models\ProjectGallery;
use Illuminate\Support\Str; 

class ProjectsController extends Controller
{
    public function index()
    {
        $segments = request()->segments();
        $langs = end($segments);
        $lang = ($langs =='ar') ? 'ar' : 'en';
        $text = ProjectsPageDescription::where('lang',$lang)->first();
    	$data = Projects::where('lang',$lang)->get();

    	return view('projects')
    	->with(compact('text','data'));
    }

    public function project_detail($id)
    {
        // $text = 'Hello World';

        // print_r($text);die;
        $title = str_replace("-"," ",Str::slug($id));
        // print_r($id);die;
    	$data = Projects::where('slug',$id)->first();
    	$gallery = ProjectGallery::where('project_id',$data->id)->get();
    	$projects = Projects::get();

    	return view('project_detail')
    	->with(compact('gallery','data','projects'));
    }
}
