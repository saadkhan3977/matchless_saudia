<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogPage;
use App\Models\BlogTags;
use App\Models\BlogComment;
use Illuminate\Support\Str; 
use DB;
use Illuminate\Http\Response;
use Cookie;


class BlogController extends Controller
{
    public function index()
    {
        $segments = request()->segments();
        $langs = end($segments);
        $lang = ($langs =='ar') ? 'ar' : 'en';
        
    	$blogs = Blog::where('lang',$lang)->paginate(1);
        $categories = BlogCategory::where('lang',$lang)->get();

        $blogpage = BlogPage::where('lang',$lang)->first();
        $tags = BlogTags::where('lang',$lang)->get();

    	return view('blog')
    	->with(compact('blogs','categories','blogpage','tags'));
    }

    public function blog_detail($id)
    {
        $segments = request()->segments();
        $langs = end($segments);
        $lang = ($langs =='ar') ? 'ar' : 'en';

        $featureblog = Blog::where('lang',$lang)->where('feature','on')->get();
        $latestblog = Blog::where('lang',$lang)->OrderBy('id','desc')->take(3)->get();
        $tags = BlogTags::get();
        $title = str_replace("-"," ",Str::slug($id));

        $blog = Blog::where('title',$title)->first();
        // foreach (json_decode($blog->keyword) as $key => $value) {
        //     # code...
        // print_r($value);die;
        // }
    	$events = Blog::where('event','on')->where('lang',$lang)->get();
        $categories = BlogCategory::where('lang',$lang)->get();
        $comments = BlogComment::get();


        return view('blog_inside')
    	->with(compact('blog','categories','tags','comments','events','featureblog','latestblog'));
    }

    public function comment(Request $request)
    {
    	// $minutes = 60;
	    //   $response = new Response('Set Cookie');
	    //   $response->withCookie(cookie('name', '1', $minutes));
	    //    Cookie::get('name') ;	
    		$minutes = 60; 
	    	$response = new Response($request->name); 
	    	$response->withCookie(cookie('name', $request->name, $minutes)); 

	    	BlogComment::create($request->all());
	    	return redirect()->back();
	    	return $response; 

    }
	    // public function setCookie(Request $request) 
	    // { 
	    // 	$minutes = 1; 
	    // 	$response = new Response('Hello World'); 
	    // 	$response->withCookie(cookie('name', 'virat', $minutes)); 
	    // 	return $response; 
	    // } 
	    // public function getCookie(Request $request) 
	    // { 
	    // 	$value = $request->cookie('name'); 
	    // 	echo $value; 
	    // }
    	// echo Cookie::get('name');
}
