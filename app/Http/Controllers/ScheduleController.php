<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\BlogCategory;

class ScheduleController extends Controller
{
    public function index($id)
    {
    	$blog = Schedule::where('slug',$id)->first();
    	$category = BlogCategory::find($blog->category_id)->first();
    	return view('event_inside')
    	->with(compact('blog','category'));
    }
}
