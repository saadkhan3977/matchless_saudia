<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeoTools;

class SeoToolsController extends Controller
{
    public function keywords(Request $request)
    {
    	if($_SERVER['REQUEST_METHOD'] =='POST')
    	{
    		// print_r($request->facebook_status);die;

    		$logo = SeoTools::first();
	    	if($logo)
	    	{
	    		$data = [
		            'keyword' => $request->keyword,
		        ];

		        $logo->update($data);
	    	}
	    	else{

	    		$data = [
		            'keyword' => $request->keyword,
		        ];

	        	SeoTools::create($data);
	    	}
    		return redirect()->to('/admin/seotools/keywords');
    	}
    	else{

	    	$seotools = SeoTools::first(); 
	    	return view('admin.seotools.keywords')
	    	->with(compact('seotools'));
	    }
    }
}
