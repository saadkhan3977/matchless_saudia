<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialSettingLinks;
use App\Models\SocialSettingFacebook;
use App\Models\SocialSettingGoogle;

class SocialSettingController extends Controller
{
    public function links(Request $request)
    {
    	if($_SERVER['REQUEST_METHOD'] =='POST')
    	{
    		// print_r($request->facebook_status);die;

    		$logo = SocialSettingLinks::first();
	    	if($logo)
	    	{
	    		$data = [
		            'facebook' => $request->facebook,
		            'facebook_status' => $request->facebook_status,

		            'twitter' => $request->twitter,
		            'twitter_status' => $request->twitter_status,

		            'whatsapp' => $request->whatsapp,
		            'whatsapp_status' => $request->whatsapp_status,

		            'linkedin' => $request->linkedin,
		            'linkedin_status' => $request->linkedin_status,

		            'instagram' => $request->instagram,
		            'instagram_status' => $request->instagram_status,

		        ];

		        $logo->update($data);
	    	}
	    	else{

	    		$data = [
		            'facebook' => $request->facebook,
		            'facebook_status' => $request->facebook_status,

		            'twitter' => $request->twitter,
		            'twitter_status' => $request->twitter_status,

		            'whatsapp' => $request->whatsapp,
		            'whatsapp_status' => $request->whatsapp_status,

		            'linkedin' => $request->linkedin,
		            'linkedin_status' => $request->linkedin_status,

		            'instagram' => $request->instagram,
		            'instagram_status' => $request->instagram_status,
		        ];

	        	SocialSettingLinks::create($data);
	    	}
    		return redirect()->to('/admin/social-setting/links');
    	}
    	else{

    		$links = SocialSettingLinks::first();
    		return view('admin.social-setting.links')
    		->with(compact('links'));
    	}
    }


    public function facebook(Request $request)
    {
    	if($_SERVER['REQUEST_METHOD'] =='POST')
    	{
    		// print_r($request->facebook_status);die;

    		$logo = SocialSettingFacebook::first();
	    	if($logo)
	    	{
	    		$data = [
		            'app_id' => $request->app_id,
		            'app_secret' => $request->app_secret,
		            'web_url' => $request->web_url,
		            'oauth_uri' => $request->oauth_uri,
		            'status' => 'ACTIVE',
		        ];

		        $logo->update($data);
	    	}
	    	else{

	    		$data = [
		            'app_id' => $request->app_id,
		            'app_secret' => $request->app_secret,
		            'web_url' => $request->web_url,
		            'oauth_uri' => $request->oauth_uri,
		            'status' => 'ACTIVE',
		        ];

	        	SocialSettingFacebook::create($data);
	    	}
    		return redirect()->to('/admin/social-setting/facebook');
    	}
    	else{

    		$facebook = SocialSettingFacebook::first();
    		return view('admin.social-setting.facebook')
    		->with(compact('facebook'));
    	}
    }



    public function google(Request $request)
    {
    	if($_SERVER['REQUEST_METHOD'] =='POST')
    	{
    		// print_r($request->facebook_status);die;

    		$logo = SocialSettingGoogle::first();
	    	if($logo)
	    	{
	    		$data = [
		            'app_id' => $request->app_id,
		            'app_secret' => $request->app_secret,
		            'web_url' => $request->web_url,
		            'oauth_uri' => $request->oauth_uri,
		            'status' => 'ACTIVE',
		        ];

		        $logo->update($data);
	    	}
	    	else{

	    		$data = [
		            'app_id' => $request->app_id,
		            'app_secret' => $request->app_secret,
		            'web_url' => $request->web_url,
		            'oauth_uri' => $request->oauth_uri,
		            'status' => 'ACTIVE',
		        ];

	        	SocialSettingGoogle::create($data);
	    	}
    		return redirect()->to('/admin/social-setting/google');
    	}
    	else{

    		$google = SocialSettingGoogle::first();
    		return view('admin.social-setting.google')
    		->with(compact('google'));
    	}
    }

    public function facebook_status(Request $request)
    {
    	$data = SocialSettingFacebook::first();
    	$data->status = $request->status;
    	$data->save();
    	return redirect()->back();
    }

    public function google_status(Request $request)
    {
    	$data = SocialSettingGoogle::first();
    	$data->status = $request->status;
    	$data->save();
    	return redirect()->back();
    }
}
