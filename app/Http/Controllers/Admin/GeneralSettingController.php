<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GeneralSettingLogo;
use App\Models\GeneralSettingFavicon;
use App\Models\GeneralSettingPreloader;
use App\Models\GeneralSettingHeader;
use App\Models\GeneralSettingWebStyle;

class GeneralSettingController extends Controller
{
    public function logo(Request $request)
    {
    	if($_SERVER['REQUEST_METHOD'] =='POST')
    	{

    		$logo = GeneralSettingLogo::first();
	    	if($logo)
	    	{
	    		if($request->hasFile('file')) 
		        {
		            $files = $request->file('file');
		            $destinationPath = 'uploads/logo/'; // upload path
		            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
		            $files->move($destinationPath, $fileName);
		        	// dd($fileName);
		        }
	    		$data = [
		            'file' => $fileName,
		        ];

		        $logo->update($data);
	    	}
	    	else{

	    		$files = $request->file('file');
	            $destinationPath = 'uploads/logo/'; // upload path
	            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
	            $files->move($destinationPath, $fileName);
	    		
	    		$data = [
		            'file' => $fileName,
		        ];
	        	GeneralSettingLogo::create($data);
	    	}
    		return redirect()->to('/admin/general-setting/logo');
    	}
    	else{

    		$logo = GeneralSettingLogo::first();
    		return view('admin.general-setting.logo')
    		->with(compact('logo'));
    	}
    }

    public function favicon(Request $request)
    {
    	if($_SERVER['REQUEST_METHOD'] =='POST')
    	{

    		$logo = GeneralSettingFavicon::first();
	    	if($logo)
	    	{
	    		if($request->hasFile('file')) 
		        {
		            $files = $request->file('file');
		            $destinationPath = 'uploads/logo/'; // upload path
		            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
		            $files->move($destinationPath, $fileName);
		        }
	    		$data = [
		            'file' => $fileName,
		        ];

		        $logo->update($data);
	    	}
	    	else{

	    		$files = $request->file('file');
	            $destinationPath = 'uploads/logo/'; // upload path
	            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
	            $files->move($destinationPath, $fileName);
	    		
	    		$data = [
		            'file' => $fileName,
		        ];
	        	GeneralSettingFavicon::create($data);
	    	}
    		return redirect()->to('/admin/general-setting/favicon');
    	}
    	else{

    		$logo = GeneralSettingFavicon::first();
    		return view('admin.general-setting.favicon')
    		->with(compact('logo'));
    	}
    }

    public function preloader(Request $request)
    {
    	$loader = GeneralSettingPreloader::first();
    	return view('admin.general-setting.preloader')
    	->with(compact('loader'));
    }

    public function web_preloader(Request $request)
    {
    	$logo = GeneralSettingPreloader::first();
	    if($logo)
	    {
    		if($request->hasFile('website_loader')) 
	        {
	            $files = $request->file('website_loader');
	            $destinationPath = 'uploads/preloader/'; // upload path
	            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
	            $files->move($destinationPath, $fileName);
	        }
    		$data = [
	            'website_loader' => $fileName,
	        ];

	        $logo->update($data);
    	}
    	else{

    		$files = $request->file('website_loader');
            $destinationPath = 'uploads/preloader/'; // upload path
            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $fileName);
    		
    		$data = [
	            'website_loader' => $fileName,
	        ];
        	GeneralSettingPreloader::create($data);
    	}
		return redirect()->to('/admin/general-setting/preloader');
    }


    public function admin_preloader(Request $request)
    {
    	$logo = GeneralSettingPreloader::first();
	    if($logo)
	    {
    		if($request->hasFile('admin_loader')) 
	        {
	            $files = $request->file('admin_loader');
	            $destinationPath = 'uploads/preloader/'; // upload path
	            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
	            $files->move($destinationPath, $fileName);
	        }
    		$data = [
	            'admin_loader' => $fileName,
	        ];

	        $logo->update($data);
    	}
    	else{

    		$files = $request->file('admin_loader');
            $destinationPath = 'uploads/preloader/'; // upload path
            $fileName = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $fileName);
    		
    		$data = [
	            'admin_loader' => $fileName,
	        ];
        	GeneralSettingPreloader::create($data);
    	}
		return redirect()->to('/admin/general-setting/preloader');
    }


    public function header(Request $request)
    {
    	if($_SERVER['REQUEST_METHOD'] =='POST')
    	{

    		$header = GeneralSettingHeader::where('lang',$request->lang)->first();
	    	if($header)
	    	{
	    		$data = [
		            'title' => $request->title,
		            'lang' => $request->lang,
		            'subscribe' => $request->subscribe,
		            'email' => $request->email,
		            'phone' => $request->phone,
		            'copyright' => $request->copyright,
		            'submit' => $request->submit,
		        ];

		        $header->update($request->all());
	    	}
	    	else{

	    		$data = [
	    			'title' => $request->title,
		            'lang' => $request->lang,
		            'subscribe' => $request->subscribe,
		            'email' => $request->email,
		            'phone' => $request->phone,
		            'submit' => $request->submit,
		            'copyright' => $request->copyright,
		        ];
	        	GeneralSettingHeader::create($request->all());
	    	}
    		return redirect()->to('/admin/general-setting/header');
    	}
    	else{
	        $en = GeneralSettingHeader::where('lang','en')->first();
	        $ar = GeneralSettingHeader::where('lang','ar')->first();
    		$header = GeneralSettingHeader::first();
    		return view('admin.general-setting.header')
    		->with(compact('header','en','ar'));
    	}
    }


    public function webstyle(Request $request)
    {
    	if($_SERVER['REQUEST_METHOD'] =='POST')
    	{

    		$logo = GeneralSettingWebStyle::first();
	    	if($logo)
	    	{
	    		
	    		$data = [
		            'title' => $request->title,
		            'front_theme_color' => $request->front_theme_color,
		            'front_text_color' => $request->front_text_color,
		            'front_background' => $request->front_background,

		            'admin_theme_color' => $request->admin_theme_color,
		            'admin_text_color' => $request->admin_text_color,
		            'admin_background' => $request->admin_background,

		            'tawkto' => $request->tawkto,
		            'tawkto_status' => $logo->tawkto_status,
		        ];

		        $logo->update($data);
	    	}
	    	else{

	    		$data = [
		            'title' => $request->title,
		            'front_theme_color' => $request->front_theme_color,
		            'front_text_color' => $request->front_text_color,
		            'front_background' => $request->front_background,

		            'admin_theme_color' => $request->admin_theme_color,
		            'admin_text_color' => $request->admin_text_color,
		            'admin_background' => $request->admin_background,

		            'tawkto' => $request->tawkto,
		            'tawkto_status' => 'PENDING',
		        ];
	        	GeneralSettingWebStyle::create($data);
	    	}
    		return redirect()->to('/admin/general-setting/webstyle');
    	}
    	else{

    		$webstyle = GeneralSettingWebStyle::first();
    		return view('admin.general-setting.webstyle')
    		->with(compact('webstyle'));
    	}
    }
    public function webstyle_status(Request $request,$id)
    {
		$logo = GeneralSettingWebStyle::find($id);

    		$data = [
	            'tawkto_status' => $request->status,
	        ];
        	$logo->update($data);
    	return redirect()->to('/admin/general-setting/webstyle');
    }

}
